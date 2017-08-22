<?php
$shuoshuoTxt = $_POST['time'];
$moningOrNight = $_POST['moningOrNight'];
$pic = $_FILES["uploadFile"]["tmp_name"];
//$pic = $_FILES["uploadFile"];
echo $pic;

move_uploaded_file($pic,"pic/shuoshuo/".$_FILES["uploadFile"]["name"]);
if($_FILES["uploadFile"]["name"]){
    $picUrl = "app/pic/shuoshuo/".$_FILES["uploadFile"]["name"];
}

$connent = new mysqli("localhost","root","","kongjian");
if($connent->connect_error){
    die("连接失败：".$connent->connect_error);
}else{
}

$insertdata = "insert into shuoshuo(context,pic) values('".$shuoshuoTxt."','".$picUrl."')";

if($connent->query($insertdata)==true){
//    echo "<script>alert('定制成功，我们的老师将会及时与您联系')</script>";
}else{
    echo "Error insert data: " . $connent->error;
}
mysqli_close($connent);
?>