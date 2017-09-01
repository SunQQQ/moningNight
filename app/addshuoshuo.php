<?php
$pic = isset($_POST["picInput"])? $_POST["picInput"] : 'test';
$shuoshuoTxt = $_POST["txtInput"];

//move_uploaded_file($pic,"../pic/shuoshuo/".$_FILES["picdata"]["name"]);
//if($_FILES["picdata"]["name"]){
//    $picUrl = "pic/shuoshuo/".$_FILES["picdata"]["name"];
//}

$connent = new mysqli("localhost","root","","moningnight");
if($connent->connect_error){
    die("连接失败：".$connent->connect_error);
}else{
}

//$insertdata = "insert into shuoshuo(shuoshuo,pic) values('".$shuoshuoTxt."','".$picUrl."')";
$insertdata = "insert into shuoshuo(shuoshuo,pic) values('".$shuoshuoTxt."','".$pic."')";

$json = [
    "code" => "200",
    "jsondata" => "a"
];
echo json_encode($json,JSON_UNESCAPED_UNICODE);
if($connent->query($insertdata)==true){
//    echo "<script>alert('定制成功，我们的老师将会及时与您联系')</script>";
}else{
    echo "Error insert data: " . $connent->error;
}
mysqli_close($connent);
?>
