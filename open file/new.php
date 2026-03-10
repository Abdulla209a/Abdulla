<?php


$path="imge/".time().".". strtolower(basename($_FILES["file"]["type"]));


move_uploaded_file($_FILES["file"]["tmp_name"],$path );












?>