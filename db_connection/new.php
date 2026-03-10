<?php

require("conn.php");

$name=$_POST["name"];
$email=$_POST["email"];
$parol=$_POST["parol"];
$country=$_POST["country"];
$city=$_POST["city"];
$sql="INSERT INTO talaba(name,email,parol,country,city)
VALUES('$name','$email','$parol','$country','$city')";

if($ulanish->query($sql)===TRUE){
    header('Location:about.php');
} else{
    echo "xatolik". $ulanish->error;
}






?>