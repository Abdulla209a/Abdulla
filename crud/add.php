<?php

require("connect.php");
if($_POST){
$name=$_POST["name"];
$email=$_POST["email"];
$age=$_POST["age"];

$sql="INSERT INTO talabalar(name,email,age)
VALUES('$name','$email','$age')";

if($conn->query($sql)===TRUE){
  
} else{
    echo "xatolik". $connect->error;
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
    <form action="add.php" method="POST">
        <h2>ADD STUDENTS</h2> 
     <input type="text" name="name" placeholder="name" ><br><br>
   <input type="email" name="email" placeholder="email" > <br><br>
   <input type="number" name="age" placeholder="age"><br><br>
   <button type =submit>yuborish</button>  <br><br>

</form>
  
</body>
</html>
<a href="read.php"></a>