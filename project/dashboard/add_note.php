<?php
session_start();
require("../connect.php");

if(!isset($_SESSION["user_id"])){
    header("Location: ../login.php");
    exit;
}

$user_id = $_SESSION["user_id"];

$title = !empty($_POST['sarlavha']) ? htmlspecialchars(trim($_POST['sarlavha'])) : '';
$content = !empty($_POST['matn']) ? htmlspecialchars(trim($_POST['matn'])) : '';

if($title != '' && $content != ''){
    $sql = "INSERT INTO notes(title, content, user_id) VALUES('$title', '$content', '$user_id')";
    if($conn->query($sql) === false){
        echo "Xatolik: " . $conn->error;
        exit;
    }
}


header("Location: dash.php");
exit;
?>