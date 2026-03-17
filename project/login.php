<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<h2>LOGIN</h2>

<form action="verfication.php" method="POST">
    
    <input type="text" name="login" placeholder="Login"><br><br>
    
    <input type="password" name="password" placeholder="Parol"><br><br>
    
    <button type="submit">Kirish</button>

</form>

<br>

<a href="login.php">Ro‘yxatdan o‘tish</a>

<hr>

<?php 
if(isset($_SESSION["login_errors"]))
{
    $errors = $_SESSION["login_errors"];

    foreach($errors as $error){
        echo "<p style='color:red;'>".$error."</p>";
    }

    unset($_SESSION["login_errors"]);
}
?>

</body>
</html>