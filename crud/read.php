<?php

require("connect.php");

$sql="select * from talabalar";
$result=$conn->query($sql);
$talabalar=$result->fetch_all(MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</table>
</head>
<body>
    <h2> STUDENTS LIST </h2>
    <div>
    <table border = "1">
        <tr>
        <th> ID </th>
        <th> name </th>
        <th> email </th>
        <th> age </th>
         <th> AMALLAR </th>
        </tr>


<?php
foreach ($talabalar as $talaba) : ?>
<tr>
<td><?=$talaba["id"];?></td>
<td><?=$talaba["name"];?></td>
<td><?=$talaba["email"];?></td>
<td><?=$talaba["age"];?></td>

  <td>  
<div style="display:flex">
    <form action="view.php" method="POST">
<input type="hidden" name="id" value="<?=$talaba["id"];?>">
<input type="submit" value="edit">
</form>
<form action="delete.php" method="POST">
<input type="hidden" name="id" value="<?=$talaba["id"];?>">
<input type="submit" value="delete">
</form>

</div>
</td>
</tr>

<?php  endforeach;  ?>

</table>
 <a href="add.php">qoshish</a>
</div>
</body>
</html>
