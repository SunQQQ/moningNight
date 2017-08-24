<?php
//$name = $_POST['name'];

$connent = new mysqli("localhost","root","","moningnight");
if($connent->connect_error){
    die("连接失败：".$connent->connect_error);
}else{
}

$sql = "select * from time where name='孙权' ORDER BY moningnight DESC";
$result = $connent->query($sql);

$dataArray = array();
while ($rows=mysqli_fetch_array($result,MYSQL_ASSOC)){
    $count=count($rows);//不能在循环语句中，由于每次删除 row数组长度都减小
    for($i=0;$i<$count;$i++){
        unset($rows[$i]);//删除冗余数据
    }
    array_push($dataArray,$rows);
}
$json = [
    "code" => "200",
    "jsondata" => $dataArray
];
echo json_encode($json,JSON_UNESCAPED_UNICODE);

$result->free();
mysqli_close($connent);
?>