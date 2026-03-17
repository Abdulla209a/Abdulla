<?php
$server="localhost";
$user="root";
$password="";
$db="new_dd";

$conn=new mysqli($server,$user,$password,$db);

if($conn->connect_error){
    die("xatolik " . $conn->connect_error);
}
?>