/**
 * Created by OnlyMid on 2017/8/22.
 */
document.getElementsByClassName("right")[0].onclick = function () {
    var time = document.getElementsByClassName("moning-input")[0].value;
    var moningOrNight = document.getElementsByClassName("moningSelect")[0].value;
    console.log(time);
    console.log(moningOrNight);

    $.ajax({
        url:"http://192.168.10.205/proxy/sunq/moningNight/app/add.php",
        type:"post",
        data:{
            time:time,
            moningOrNight:moningOrNight
        },
        success:function (data) {
//            document.getElementsByClassName("texteara")[0].append(data);
        }
    });
}