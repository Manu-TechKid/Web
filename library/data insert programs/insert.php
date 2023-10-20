<!doctype html>
<html>
<head>
<h1>insert data into our table</h1>
<head>
<body>
<center>
<?php
require "dbconnect.php";
$firstname=$_REQUEST[firstname];
$lastname=$_REQUEST[lastname];
$gender=$_REQUEST[gender];
$address=$_REQUEST[address];

$sql="insert into staff values('$firstname','$lastname','$gender','$address')";
if($conn->query($sql)===true) {
    echo "records inserted";
}else{
    echo"error";
}
?>
</center>
</body>
</html>