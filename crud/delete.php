<?php
require("conn.php");

$id = $_POST["id"];
$sql = "DELETE FROM students WHERE id=$id";

if($conn->query($sql) === TRUE){
    header("Location: read.php");
    exit;
} else {
    echo "xatolik: " . $conn->error;
}
?>