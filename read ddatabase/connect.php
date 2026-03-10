<?php   
$server='localhost';
$user='root';
$password='';
$db='new_db';



$conn = new MYSQLI($server,$user,$password,$db);

if($conn->connect_error)
{ die ("xatolik". $conn->connect_error);
}






?>