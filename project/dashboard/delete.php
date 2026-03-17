<?php
require("../connect.php");

$id = $_GET['id'];

$conn->query("DELETE FROM notes WHERE id='$id'");

header("Location:dash.php");