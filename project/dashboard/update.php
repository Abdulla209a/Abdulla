<?php
require("../connect.php");

$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql = "UPDATE notes 
        SET title='$title', content='$content' 
        WHERE id='$id'";

if($conn->query($sql) === true){
    header("Location:dash.php");
} else {
    echo "xatolik";
}