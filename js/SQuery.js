/**
 * Created by OnlyMid on 2017/8/23.
 */
var SQ = {
    FormatData:function (timer) {
        var year = timer.getFullYear(),
        // var year = 2017,
            month = timer.getMonth() + 1,
            date = timer.getDate(),
            hour = timer.getHours(),
            minute = timer.getMinutes(),
            second = timer.getSeconds();

        if(hour<10){
            hour = '0'+hour;
        }
        if(minute<10){
            minute = '0'+hour;
        }

        return year + "-" + month + "-" + date + " " + hour + ":" + minute + ":" + second;
    },
    FormatData2:function (timer) {
        var year = timer.getFullYear(),
            // var year = 2017,
            month = timer.getMonth() + 1,
            date = timer.getDate()

        return year + "-" + month + "-" + date;
    }
};