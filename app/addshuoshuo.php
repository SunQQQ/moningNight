<?php
if(isset($_POST["picInput"])){
    $pic = base64_decode($_POST["picInput"]);
}
$shuoshuoTxt = $_POST["txtInput"];

// 生成的文件名
$photo = "2.jpg";

// 生成文件
file_put_contents($photo, $pic, true);

//move_uploaded_file($pic,"../pic/shuoshuo/".$_FILES["picdata"]["name"]);
//if($_FILES["picdata"]["name"]){
//    $picUrl = "pic/shuoshuo/".$_FILES["picdata"]["name"];
//}
move_uploaded_file($photo,"../pic/shuoshuo/1.png");
$picUrl = "pic/shuoshuo/1.png";

$connent = new mysqli("localhost","root","","moningnight");
if($connent->connect_error){
    die("连接失败：".$connent->connect_error);
}else{
}

$insertdata = "insert into shuoshuo(shuoshuo,pic) values('".$shuoshuoTxt."','".$picUrl."')";
//$insertdata = "insert into shuoshuo(shuoshuo,pic) values('".$shuoshuoTxt."','".$pic."')";

$json = [
    "code" => "200",
    "jsondata" => $pic
];
echo json_encode($json,JSON_UNESCAPED_UNICODE);
if($connent->query($insertdata)==true){
//    echo "<script>alert('定制成功，我们的老师将会及时与您联系')</script>";
}else{
    echo "Error insert data: " . $connent->error;
}
mysqli_close($connent);
?>
