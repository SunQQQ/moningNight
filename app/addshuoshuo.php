<?php
$shuoshuoTxt = $_POST["txtInput"];
$baseArray = $_POST["picInput"];
for($i=0;$i<count($baseArray);$i++){
    //过滤base64字符串前缀，解码
    $url = substr(strstr($baseArray[$i],','),1);
    $pic = base64_decode($url);

    // 获取base64图片格式
    if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $baseArray[$i], $result)){
        $type = $result[2];
    }
    // 生成的文件名
    $photo = '../pic/shuoshuo/'.randName().'.'.$type;

    // 生成文件
    file_put_contents($photo, $pic);
}

//随机生成移动后的文件名
function randName() {
    $str = 'abcdefghijkmnpqrstwxyz23456789';
    return substr(str_shuffle($str),0,4);
}

?>
