<?php

require("connect.php");
// var_dump($_POST["full_name"]);
$name=!empty($_POST["full_name"]) ? htmlspecialchars(trim($_POST["full_name"]),ENT_COMPAT): '' ;

$date=!empty($_POST["birth_day"]) ? htmlspecialchars(trim($_POST["birth_day"]),ENT_COMPAT): "2000-01-01" ;

$login=!empty($_POST["login"]) ? htmlspecialchars(trim($_POST["login"]),ENT_COMPAT): '' ;

$password=!empty($_POST["pass"]) ? htmlspecialchars(trim($_POST["pass"]),ENT_COMPAT): '' ;




$error=false;

if($name==''){
    echo "ism kiritish shart <br>";
    $error=true;
}

if($login==''){
    echo "login kiritish shart <br>";
    $error=true;
}

if($date==''){
    echo "sana kiritish shart <br>";
    $error=true;
}

if($password==''){
    echo "parol kiritish shart <br> ";
    $error=true;
}

if(!$error){
$sorov="SELECT * FROM users WHERE login='$login' ";

if($conn->query($sorov)->num_rows>0){
    echo "bunday foydlanuvchi mavjud";
    exit;
}
$hash_pass=md5($password);

$sql="INSERT INTO users(full_name,birth_day,login,password)
VALUES('$name','$date','$login','$hash_pass')";

if($conn->query($sql)===true){
    echo "mal yozild";
}else{
    echo "xato";
}
    
}










?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="create.php">qaytish</a>
</body>
</html>