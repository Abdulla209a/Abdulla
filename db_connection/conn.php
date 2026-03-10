<?php   
$server='localhost';
$user='root';
$password='';
$db='new_db';



$ulanish = new MYSQLI($server,$user,$password,$db);

if($ulanish->connect_error)
{ die ("xatolik". $ulanish->connect_error);
}






?>