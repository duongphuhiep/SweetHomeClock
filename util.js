var EventBus = new Vue();
setInterval(()=>EventBus.$emit('SEC', new Date()), 1000);
const MAXDATE = new Date(8640000000000000);

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
        if (this.isUndefinedOrNull(d)) return '-';
        var month = '' + (d.getMonth() + 1);
        var day = '' + d.getDate();
        var year = d.getFullYear();

        if (month.length < 2) month = '0' + month;
        if (day.length < 2) day = '0' + day;

        return [year, month, day].join('-');
    },

    timeToString(d) {
        if (this.isUndefinedOrNull(d)) return '-';
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
    },

    //convert date to "10 minute ago"
    dateTimeToDiffString(from, to) {
        if (this.isUndefinedOrNull(from) || this.isUndefinedOrNull(to)) return '-';
        let sec = Math.floor((to.getTime()-from.getTime())/1000);
        if (sec > 60)
            return Math.round(sec/60)+" min";
        return sec+" sec";
    },

    isUndefinedOrNull(o) {
        return typeof o === "undefined" || o===null
    }
};

