<?php

require("connect.php");
$id=$_POST["id"];

$sql="SELECT * FROM talabalar WHERE id=$id";

$talaba=$conn->query($sql)->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="POST">
        <h2>UPDATE STUDENTS</h2> 
     <input type="hidden" name="id" placeholder="name" value="<?=$talaba["id"]?>" ><br><br>
   <input type="text" name="name" placeholder="name"  value="<?=$talaba["name"]?>" > <br><br>
   <input type="email" name="email" placeholder="email"  value="<?=$talaba["email"]?>"><br><br>
    <input type="number" name="age" placeholder="age"  value="<?=$talaba["age"]?>"><br><br>
   <button type =submit name="update" value="update">yangilash</button>  
<a href="read.php">qaytish</a>
</form>
  
</body>
</html>
