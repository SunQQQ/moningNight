<?php
$shuoshuoTxt = $_POST["txtInput"];
$baseArray = json_decode($_POST["picInput"]);
$imgUrls = array();
for($i=0;$i<count($baseArray);$i++){
    //过滤base64字符串前缀，解码
    $url = substr(strstr($baseArray[$i],','),1);
    $pic = base64_decode($url);

    // 获取base64图片格式
    if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $baseArray[$i], $result)){
        // 生成的文件名
        $photo = '../pic/shuoshuo/'.randName().'.'.$result[2];

        // 生成文件
        file_put_contents($photo, $pic);
        //把php数组转成json
        array_push($imgUrls,substr($photo,3));
    }
}
//把存着多个图片地址字符串的数组转成json字符串，再往数据库里存
$imgUrlsJson = json_encode($imgUrls);

//连接数据库，存json字符串
$connent = new mysqli("localhost","root","","moningnight");
if($connent->connect_error){
    die("连接失败：".$connent->connect_error);
}else{
}
$insertdata = "insert into shuoshuo(shuoshuo,pic) values('".$shuoshuoTxt."','".$imgUrlsJson."')";
if($connent->query($insertdata)==true){
    $json = [
        "code" => "200",
        "jsondata" => '添加成功'
    ];
    echo json_encode($imgUrlsJson,JSON_UNESCAPED_UNICODE);
}else{
    echo "Error insert data: " . $connent->error;
}
mysqli_close($connent);





//随机生成移动后的文件名
function randName() {
    $str = 'abcdefghijkmnpqrstwxyz23456789';
    return substr(str_shuffle($str),0,4);
}

?>
