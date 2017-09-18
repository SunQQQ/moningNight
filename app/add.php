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
?>