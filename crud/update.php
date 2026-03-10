<?php
require("conn.php");

$id = $_POST["id"];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$students = $result->fetch_assoc();

if($_POST["update"]){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    $sql = "UPDATE students SET name='$name', email='$email', age='$age' WHERE id=$id";
    if($conn->query($sql) === TRUE){
        header("Location: read.php");
        exit;
    } else {
        echo "xatolik: " . $conn->error;
    }
}
?>

<h2>UPDATE STUDENTS</h2>
<form method="POST">
<input type="hidden" name="id" value="<?= $students["id"] ?>"><br><br>
<input type="text" name="name" value="<?= $students["name"] ?>"><br><br>
<input type="email" name="email" value="<?= $students["email"] ?>"><br><br>
<input type="number" name="age" value="<?= $students["age"] ?>"><br><br>
<button type="submit" name="update">yangilash</button>
<a href="read.php">qaytish</a>
</form>