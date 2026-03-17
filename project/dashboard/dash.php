<?php
session_start();
require("../connect.php");

if(!isset($_SESSION["user_id"])){
    header("Location: ../login.php");
    exit;
}

$user_id = $_SESSION["user_id"];
?>

<h2>Matn Yazsh</h2>

<form action="add_note.php" method="POST">
    <input type="text" name="sarlavha" placeholder="Sarlavha"><br><br>
    <textarea name="matn" placeholder="Matnni berdan yazing..." rows="5" cols="30"></textarea><br><br>
    <button type="submit">Yozish</button>
</form>

<hr>

<h3> Eslatmalarm:</h3>
<?php
$sql = "SELECT * FROM notes WHERE user_id='$user_id'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo "<h4>".$row['title']."</h4>";
    echo "<p>".$row['content']."</p>";
    echo "<a href='delete.php?id=".$row['id']."'>Ochirish</a> | ";
    echo "<a href='edit.php?id=".$row['id']."'>Tahrirlash</a>";
    echo "<hr>";
}
?>

<a href="logout.php">Chiqish</a>