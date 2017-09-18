<?php
$time = $_POST["time"];
$money = $_POST["money"];
$moningOrNight = $_POST["activity"];
$name = "孙权";

$connent = new mysqli("localhost","root","","moningnight");
if($connent->connect_error){
    die("连接失败：".$connent->connect_error);
}else{
}

$insertdata = "insert into time(name,time,moningnight,money) values('".$name."','".$time."','".$moningOrNight."','".$money."')";

mysqli_close($connent);
?>