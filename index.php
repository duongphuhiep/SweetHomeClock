<?php require_once 'csrf.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" />
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://unpkg.com/vue/dist/vue.js"></script>
	<script src="util.js"></script>
    <title>Sweet Home Clock</title>
</head>
<body>
    <!-- updater start-->
    <script type="text/x-template" id="updater">
        <div>
            <div>
				<div v-if="lastSuccessUpdate != null">data updated since {{lastSuccessUpdateSince}} ago</div>
				<div v-if="isUpdating">updating...</div>
				<div v-else>
					next update in {{nextUpdateInSec}}
				</div>
				<div v-if="lastError!=null">
                	{{lastError.message}}
				</div>
            </div>
        </div>
    </script>
    <script>
        Vue.component('updater', {
            template: '#updater',
            data(){
                return {
                    lastData: null,
					lastError: null,
                    lastUpdate:null,
					nextUpdate: null,
					isUpdating: false,
                    lastSuccessUpdate: null,
					now: new Date()
                };
            },
			computed: {
                lastSuccessUpdateSince: {
                    get() {
                        return Tools.dateTimeToDiffString(this.lastSuccessUpdate, this.now);
					}
				},
                nextUpdateInSec: {
                    get() {
                        return Tools.dateTimeToDiffString(this.now, this.nextUpdate);
					}
				}
			},
            mounted() {
                EventBus.$on("SEC", this.ticktoc);
            },
			methods: {
                ticktoc(now) {
                    this.now = now;
                    if (!Tools.isUndefinedOrNull(this.nextUpdate) && !Tools.isUndefinedOrNull(now) && now < this.nextUpdate)
                        return;
                    if (this.isUpdating) {
                        return;
                    }
                    this.isUpdating = true;
                    this.lastUpdate = now;
                    let $this = this;

                    let nextUpdateInSec = 300; //5min
                    axios.post('./api/getMissionsNext', {token:'<?=$token;?>'})
                        .then(function (response) {
                            try {
                                $this.lastError = null;
                                let data = response.data.return;
                                $this.lastData = data;

                                let hasPerturbation = false;
                                if (!Tools.isUndefinedOrNull(data.perturbations)) {
                                    for (let i = 0, max = data.perturbations.length; i < max; i++) {
                                        let m = data.perturbations[i].message;
                                        if (!Tools.isUndefinedOrNull(m) && !Tools.isUndefinedOrNull(m.text)) {
                                            hasPerturbation = true;
                                            break;
                                        }
                                    }
								}
								if (hasPerturbation) { //no need to continue anymore
                                    $this.lastError = null;
                                    $this.lastSuccessUpdate = now;
                                    nextUpdateInSec = 30;
                                    return;
								}

								if (Tools.isUndefinedOrNull(data) || Tools.isUndefinedOrNull(data.missions)) {
                                    nextUpdateInSec = 30;
                                    throw "Invalid Response"; //no perturbation & no next mission
                                }

                                let missions = data.missions;
                                if (missions === null || !(missions && missions.length)) {
                                    nextUpdateInSec = 150; //2.5min
                                    throw "Empty next mission";
                                }

                                //compute the next update

                                //find the nearest next (future) mission
                                let nearestDateInFuture = MAXDATE;
                                let hasOutDateMission = false;
                                let m;
                                for (m of missions) {
                                    let missionDateTimeStr = m.stationsDates[0];
                                    if (!Tools.isUndefinedOrNull(missionDateTimeStr)) {
                                        let missionDateTime = Tools.toDate(missionDateTimeStr);
                                        if (missionDateTime > now) {
                                            if (nearestDateInFuture>missionDateTime) {
                                                nearestDateInFuture = missionDateTime;
                                            }
                                        }
                                        else {
                                            hasOutDateMission = true;
                                        }
                                    }
                                }
                                // let nearestDateInFuture = new Date(Math.min.apply(null, missions.map(function (m) {
                                //     let missionDateTimeStr = m.stationsDates[0];
                                //     if (Tools.isUndefinedOrNull(missionDateTimeStr)) {
                                //         return MAXDATE;
                                //     }
                                //     let missionDateTime = Tools.toDate(missionDateTimeStr)
                                //     if (missionDateTime < now) return MAXDATE;
                                //     return missionDateTime;
                                // })));

                                if (hasOutDateMission) {
                                    nextUpdateInSec = 5;
                                }
                                else {
                                    if (nearestDateInFuture == MAXDATE) {
                                        nextUpdateInSec = 300; //5min
                                        throw "Unable to find nearest future mission (now = " + now.toString() + ")";
                                    }

                                    let timeToWaitInSecond = Math.floor((nearestDateInFuture.getTime() - now.getTime()) / 1000);


                                    if (timeToWaitInSecond < 0) {
                                        nextUpdateInSec = 60 //1min
                                        throw "unexpected situation nearestDateInFuture (was in the past) = " + nearestDateInFuture.toString() + "; now = " + now.toString()
                                    }

                                    nextUpdateInSec = timeToWaitInSecond / 2;

                                    if (timeToWaitInSecond < 3) {
                                        nextUpdateInSec = 3; //update after 3s at most
                                    }

                                    if (timeToWaitInSecond > 1800) {
                                        nextUpdateInSec = 900; //update after 15min at least
                                    }

                                    //console.log("nearestDateInFuture="+Tools.timeToString(nearestDateInFuture) + " - now=" + Tools.timeToString(now)+" = "+timeToWaitInSecond+"s - nextUpdateInSec="+nextUpdateInSec+"s");
                                }
                                $this.lastError = null;
                                $this.lastSuccessUpdate = now;
                            }
                            catch (e) {
                                nextUpdateInSec = 10;
                                $this.lastError = {
                                    message: e,
                                    response
                                };

                                console.error(e, response);
                            }
                        })
                        .catch(function (error) {
                            nextUpdateInSec = 30;
                            $this.lastError = error;
                            console.error(error);
                        })
                        .finally(() => {
                            let nextUpdate = new Date(now);
                            nextUpdate.setSeconds(nextUpdate.getSeconds() + nextUpdateInSec);

                            $this.nextUpdate = nextUpdate;
                            //console.log(Tools.timeToString(nextUpdate));
                            $this.isUpdating = false;
                            EventBus.$emit("MISSION_UPDATE", $this);
                        });
                }
            }
        });
    </script>
    <!-- updater end-->

	<!-- clock start-->
	<script type="text/x-template" id="clock">
		<div>
			<div>{{date}}</div>
            <div style="align-content: right">{{time}}</div>
		</div>
	</script>
	<script>
        Vue.component('clock', {
            template: '#clock',
            data(){
                return { now: new Date() };
            },
			computed: {
                date: {
                    get() {
                        return Tools.dateToString(this.now);
                    }
				},
				time: {
                    get() {
                        return Tools.timeToString(this.now);
                    }
				}
			},
            mounted() {
                let $this = this;
                EventBus.$on("SEC", (now)=>{
                    $this.now = now;
                })
            }
        });
	</script>
	<!-- clock end-->

	<!-- mission start-->
	<script type="text/x-template" id="mission">
		<tr>
			<td>{{m.stations[1].name}}</td>
			<td>{{m.stationsMessages[0]}}</td>
			<td>{{timeToWaitInMinute}}</td>
		</tr>
	</script>
	<script>
        Vue.component('mission', {
            template: '#mission',
            props: ['m'],
			data(){
				return { now: new Date() };
			},
			computed: {
                timeToWaitInMinute() {
                    //if (!this.m.stationsStops[0]) return "";
                    let strArriveAt = this.m.stationsDates[0]
                    let y = strArriveAt.substr(0,4),
                        mo = strArriveAt.substr(4,2) - 1,
                        d = strArriveAt.substr(6,2),
                        h = strArriveAt.substr(8,2),
                        mi = strArriveAt.substr(10,2);
                    let arriveAt = new Date(y,mo,d,h,mi, 0);
                    //if the date is valid
                    if (arriveAt.getFullYear() == y && arriveAt.getMonth() == mo && arriveAt.getDate() == d
                        && arriveAt.getHours()==h && arriveAt.getMinutes()==mi)
                    {
                        return Math.floor((arriveAt.getTime() - this.now.getTime()) / 60000);
                    }
				}
			},
			mounted() {
                let $this = this;
                EventBus.$on("SEC", (now)=>{
                    $this.now = now;
				})
			}
        });
	</script>
	<!-- mission end-->

	<!-- missionList start-->
	<script type="text/x-template" id="missionList">
		<div>
			<div v-if="perturbations">{{perturbations}}</div>
			<table border="1">
				<tr>Aller</tr>
				<tr is="mission" v-for="m in this.missions" v-if="m.direction.sens=='A' && m.stationsStops=='true'" :m="m"></tr>
				<!--<tr is="mission" v-for="m in missions" v-if="m.direction.sens=='A'" :m="m"></tr>-->
				<tr>Retour</tr>
				<tr is="mission" v-for="m in this.missions" v-if="m.direction.sens=='R' && m.stationsStops=='true'" :m="m"></tr>
				<!--<tr is="mission" v-for="m in missions" v-if="m.direction.sens=='R'" :m="m"></tr>-->
			</table>
		</div>
	</script>
	<script>
        Vue.component('missionList', {
            template: '#missionList',
			computed: {
                missions: {
                    get() {
                        if (Tools.isUndefinedOrNull(this.missionsNextResponse) || Tools.isUndefinedOrNull(this.missionsNextResponse.missions))
                            return null;
                        return this.missionsNextResponse.missions;
					}
				},
                perturbations: {
                    get() {
                        if (Tools.isUndefinedOrNull(this.missionsNextResponse) || Tools.isUndefinedOrNull(this.missionsNextResponse.perturbations))
                            return null;
                        let pe = this.missionsNextResponse.perturbations.map(p => p.message.text).filter(s => !Tools.isUndefinedOrNull(s));
                        if (pe.length==0) return null;
                        return pe.length>1 ? pe : pe[0];
                    }
                }
			},
            data() {
                return {missionsNextResponse: 1};
            },
			mounted() {
                EventBus.$on("MISSION_UPDATE", (updater)=>{
                    if (updater.lastData!==null) {
                        this.missionsNextResponse = updater.lastData;
                    }
                })
			}

        });
	</script>
	<!-- missionList end-->

	<!-- root start -->
	<script type="text/x-template" id="root">
		<div>
			<clock></clock>
			<missionList></missionList>
			<updater></updater>
		</div>
	</script>
	<script>
        Vue.component('root', {
            template: '#root',
        });
	</script>
	<!-- root end -->

	<div id='app'>
		<root></root>
	</div>
	<script>
        new Vue({
            el:'#app'
        });
	</script>


</body>
</html>