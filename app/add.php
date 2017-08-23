<?php
$time = $_POST["time"];
$moningOrNight = $_POST["moningOrNight"];
$name = "孙权";

$connent = new mysqli("localhost","root","","moningnight");
if($connent->connect_error){
    die("连接失败：".$connent->connect_error);
}else{
}

$insertdata = "insert into time(name,moningnight,time) values('".$name."','".$time."','".$moningOrNight."')";

if($connent->query($insertdata)==true){
    echo "<script>alert('定制成功，我们的老师将会及时与您联系')</script>";
}else{
    echo "Error insert data: " . $connent->error;
}
mysqli_close($connent);
?>