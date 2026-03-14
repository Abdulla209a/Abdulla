<?php

require("connect.php");

$id=$_POST["id"];

$sql="delete from talabalar where id=$id";
if($conn->query($sql)===TRUE){
    header("location:read.php");
    exit;
}else{
    echo "xatolik" . $conn->error;
}







?>