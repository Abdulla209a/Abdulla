<?php
require("../connect.php");

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM notes WHERE id='$id'");
$row = $result->fetch_assoc();
?>

<h2>Tahrirlash</h2>

<form action="update.php" method="POST">
    
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <input type="text" name="title" value="<?= $row['title'] ?>"><br><br>

    <textarea name="content"><?= $row['content'] ?></textarea><br><br>

    <button type="submit">Yangilash</button>

</form>