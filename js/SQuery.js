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

        return year + "-" + month + "-" + date + " " + hour + ":" + minute + ":" + second;
    }
};