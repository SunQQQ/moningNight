/**
 * Created by OnlyMid on 2017/8/22.
 */
document.getElementsByClassName("right")[0].onclick = function () {
    var time = document.getElementsByClassName("moning-input")[0].value;
    var moningOrNight = document.getElementsByClassName("moningSelect")[0].value;

    var millsTime = new Date(time);
    var formatTime = SQ.FormatData(millsTime);

    $.ajax({
        url:"http://localhost/proxy/sunq/moningNight/app/add.php",
        type:"post",
        data:{
            time:formatTime,
            moningOrNight:moningOrNight
        },
        success:function (data) {
//            document.getElementsByClassName("texteara")[0].append(data);
        }
    });
}