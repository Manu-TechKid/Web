<?php
session_start():
include "dbconnect.php";
surname=$_REQUEST['uname'];
$pwd=$_REQUEST['pwd']
if(empty(surname)){
    header("location: idex.php?error=user Name is required");
    exit()
}
else if (empty($pwd)){
    header("location: index.php?error= Fill in your password")
    exit()
}
$sql="insert into users values('$uname','$pwd')";
if($conn->query($sql)==true)
{
    echo"new records inserted";
}else{
    echo"Error:";
}
$conn->close()
?>s