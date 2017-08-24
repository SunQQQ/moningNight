<?php
//$name = $_POST['name'];

$connent = new mysqli("localhost","root","","moningnight");
if($connent->connect_error){
    die("连接失败：".$connent->connect_error);
}else{
}

//$insertdata = "select * from time where name='".$name."'";
$sql = "select * from time where name='孙权'";
$result = $connent->query($sql);
//print_r($result->fetch_row());

$jarr = array();
while ($rows=mysqli_fetch_array($result,MYSQL_ASSOC)){
    $count=count($rows);//不能在循环语句中，由于每次删除 row数组长度都减小
    for($i=0;$i<$count;$i++){
        unset($rows[$i]);//删除冗余数据
    }
    array_push($jarr,$rows);
}
echo json_encode($jarr,JSON_UNESCAPED_UNICODE);
//print_r($jarr);//查看数组

//$result->free();
mysqli_close($connent);
?>