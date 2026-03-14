<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="verfication.php" method="POST"> 
        <input type="text" name="login" placeholder="login" style="display:flex"><br>
    </div> 
    <div>
        <input type="password" name="password"  placeholder="PASSWORD" style="display:flex"><br>
    </div>
    <button type=submit>sign up</button>
</body>
</html>


<?php 
if(isset($_SESSION["login_errors"]))
    {
$errors=$_SESSION["login_errors"];
foreach($errors as $error){
 echo "<li style='color:red' >".$error."</li> <br>";
   }
   unset($_SESSION["login_errors"]);
 }
 
?>


