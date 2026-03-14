<?php

$host="localhost";
$user="root";
$pass="";
$db="new_db";

$conn=new mysqli($host,$user,$pass,$db);

if($conn->connect_error)
    {die ("connection failed:". $connect_error);
    }








?>