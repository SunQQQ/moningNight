/**
 * Created by OnlyMid on 2017/8/22.
 */
document.getElementsByClassName("right")[0].onclick = function () {
    document.getElementsByClassName("working")[0].style.display = "block";
    var time = document.getElementsByClassName("moning-input")[0].value;
    var moningOrNight = document.getElementsByClassName("3")[0].value;

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
            console.log("jj");
           document.getElementsByClassName("working")[0].style.display = "none";
           document.getElementsByClassName("loading")[0].style.display = "block";
           setTimeout(function () {
               // location.href = "index.html";
           },3000);
        }
    });
}