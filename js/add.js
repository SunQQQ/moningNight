/**
 * Created by OnlyMid on 2017/8/22.
 */
document.getElementsByClassName("right")[0].onclick = function () {
    var tijiao = weui.loading("提交中");

    var activity = document.getElementsByClassName("activity")[0].value;
    var money = document.getElementsByClassName("money")[0].value;

    var time = document.getElementsByClassName("moning-input")[0].value;
    var millsTime = new Date(time);
    var formatTime = SQ.FormatData(millsTime);

    $.ajax({
        url:"http://localhost/proxy/sunq/moningNight/app/add.php",
        type:"post",
        data:{
            time:formatTime,
            money:money,
            activity:activity
        },
        success:function (data) {
           console.log("jj");
           tijiao.hide();
           setTimeout(function () {
               // location.href = "index.html";
           },3000);
        }
    });
}