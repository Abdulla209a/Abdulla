<?php
require("conn.php");

if($_POST){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $sql = "INSERT INTO students(name,email,age) VALUES('$name','$email','$age')";
    if($conn->query($sql) === TRUE){
        header("Location: read.php");
        exit;
    } else {
        echo "xatolik: " . $conn->error;
    }
}
?>

<h2>ADD STUDENT</h2>
<form method="POST">
<input type="text" name="name" placeholder="name"><br><br>
<input type="email" name="email" placeholder="email"><br><br>
<input type="number" name="age" placeholder="age"><br><br>
<button type="submit">yuborish</button>
</form>