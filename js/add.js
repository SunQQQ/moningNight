/**
 * Created by OnlyMid on 2017/8/22.
 */
$.ajax({
    url:"http://192.168.10.205/proxy/sunq/moningNight/app/",
    type:"post",
    success:function (data) {
//            document.getElementsByClassName("texteara")[0].append(data);
    }
});
document.getElementsByClassName("right")[0].onclick = function () {
    console.log("maoshi");
}