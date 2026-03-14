<?php
require("connect.php");
$name=$_POST["name"];
$email=$_POST["age"];
$age=$_POST["age"];
$id=$_POST["id"];

$sql="update talabalar 
SET name='$name',email='$email',age='$age' where id=$id";
if ($conn->query($sql)===TRUE){
    header("location:read.php");
    exit; 
}else {
    echo"xatolik" . $conn->error;
}


?>