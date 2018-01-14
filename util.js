var EventBus = new Vue();
var MAXDATE = new Date(8640000000000000);
var Tools = {
    //convert '201807282109' to date
    toDate(s) {
        let y = s.substr(0,4),
            mo = s.substr(4,2) - 1,
            d = s.substr(6,2),
            h = s.substr(8,2),
            mi = s.substr(10,2);
        return new Date(y,mo,d,h,mi);
    },

    dateToString(d) {
        if (typeof d === "undefined" || d===null)
            return "-";
        var month = '' + (d.getMonth() + 1);
        var day = '' + d.getDate();
        var year = d.getFullYear();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;

        return [year, month, day].join('-');
    },

    timeToString(d) {
        if (typeof d === "undefined" || d===null)
            return "-";
        var h = '' + d.getHours();
        var m = '' + d.getMinutes();
        var s = '' + d.getSeconds();

        if (h.length < 2) h = '0' + h;
        if (m.length < 2) m = '0' + m;
        if (s.length < 2) s = '0' + s;

        return [h, m, s].join(':');
    },

    dateTimeToString(d) {
      return dateToString(d)+' '+timeToString(d);
    }
};
/*

class MissionNextUpdater {

    constructor(lastData, lastError) {
        this.lastData = null;
        this.lastError = null;
        this.nextUpdateInSec = 0;
        this.nextUpdate = new Date();
        this.lastUpdate = new Date();
        this.isUpdating = false
    }

    update() {
        if (this.isUpdating = true) {

        }
        this.lastUpdate = new Date();
        let $this = this;
        axios.get('./api/getMissionsNext')
            .then(function (response) {
                $this.lastError = null;
                let data = response.data.return;

                //check if response is validate

                if (typeof data=='undefined' || typeof data.missions=='undefined') {
                    $this.lastError = {message: "Invalid response", response};
                    $this.lastData = null;
                    let nextUpdateInSec = 150 //2.5min
                    $this.nextUpdateInSec = nextUpdateInSec; //2.5min
                    return;
                }


                let missions = data.missions;
                if (missions==null || !(missions && missions.length)){
                    $this.lastError = {message: "Empty next mission", response};
                    $this.lastData = null;
                    let nextUpdateInSec = 150 //2.5min
                    $this.nextUpdateInSec = nextUpdateInSec; //2.5min
                    return;
                }

                //compute the next update
                let now = new Date();

                //find the nearest next (future) mission
                let nearestDateInFuture = new Date(Math.min.apply(null, missions.map(function(m) {
                    let missionDateTimeStr = m.stationsDates[0];
                    if (typeof missionDateTimeStr=='undefined' || missionDateTimeStr==null) {
                        return MAXDATE;
                    }
                    let missionDateTime =  Tools.toDate(missionDateTimeStr)
                    if (missionDateTime < now) return MAXDATE;
                    return missionDateTime;
                })));


                if (nearestDateInFuture==MAXDATE) {
                    $this.lastError = {message: "Unable to find nearest future mission (now = "+now.toString()+")", response};
                    $this.lastData = null;
                    let nextUpdateInSec = 300 //2.5min
                    $this.nextUpdateInSec = nextUpdateInSec; //2.5min
                    return;
                }

                let timeToWaitInSecond = Math.floor((nearestDateInFuture.getTime() - now.getTime())/3600);
                if (timeToWaitInSecond<0) {
                    $this.lastError = {message: "unexpected situation nearestDateInFuture="+nearestDateInFuture.toString()+"; now="+now.toString(), response};
                    $this.lastData = null;
                    let nextUpdateInSec = 300 //5min
                    $this.nextUpdateInSec = nextUpdateInSec; //2.5min
                    return;
                }

                console.log("timeToWaitInSecond", timeToWaitInSecond, nearestDateInFuture, now);

                let nextUpdateInSec = timeToWaitInSecond / 2;

                if (timeToWaitInSecond < 3) {
                    $this.nextUpdateInSec = 3; //update after 3s at most
                }

                if (timeToWaitInSecond>1800) {
                    $this.nextUpdateInSec = 900; //update after 15min at least
                }

                $this.lastData = data;
                $this.nextUpdateInSec = nextUpdateInSec;
            })
            .catch(function (error) {
                $this.lastError = error;
                $this.lastData = null;
                $this.nextUpdateInSec = 300; //5min
            })
            .finally(()=>{
                //console.info("update finised ", $this.nextUpdateInSec, $this.lastData, $this.lastError);
                if (3>$this.nextUpdateInSec || $this.nextUpdateInSec>900) {
                    $this.lastError = {message: "unexpected situation"};
                    $this.nextUpdateInSec = 150;
                }

                console.log("next update in ",$this.nextUpdateInSec)
                setTimeout($this.update, $this.nextUpdateInSec*1000);

                EventBus.$emit("MISSION_UPDATE", $this);
            });
    }
}*/
