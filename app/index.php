<?php
//$name = $_POST['name'];

$connent = new mysqli("localhost","root","","moningnight");
if($connent->connect_error){
    die("连接失败：".$connent->connect_error);
}else{
}

//$insertdata = "select * from time where name='".$name."'";
$insertdata = "select * from time where name='孙权'";
$array = mysql_query($insertdata);
echo $array;
//echo json_encode($array);

if($connent->query($insertdata)==true){
    echo "<script>alert('定制成功，我们的老师将会及时与您联系')</script>";
}else{
    echo "Error insert data: " . $connent->error;
}
mysqli_close($connent);
?>

<?php
$con = mysql_connect("localhost","root","","moningnight");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("my_db", $con);

$result = mysql_query("SELECT * FROM Persons");

while($row = mysql_fetch_array($result))
{
    echo $row['FirstName'] . " " . $row['LastName'];
    echo "<br />";
}

mysql_close($con);
?>
