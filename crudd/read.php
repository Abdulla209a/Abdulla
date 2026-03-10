<?php

require("conn.php");

$sql="SELECT * FROM teachers";

$result=$conn->query($sql);
$teachers=$result->fetch_all(MYSQLI_ASSOC);

?>

<h2>TEACHERS</h2>
<table border="1">
<tr>

<th>id</th>
<th>name</th>
<th>age</th>
<th>tell</th>
<th>salary</th>
<th>amallar</th>


</tr>

<?php foreach($teachers as $teacher):?>
<tr>

<td><?=$teacher["id"]?></td>
<td><?=$teacher["name"]?></td>
<td><?=$teacher["age"]?></td>
<td><?=$teacher["tell"]?></td>
<td><?=$teacher["salary"]?></td>

<td>
    <form action="updete.php" method="POST" style="displey:inline";>
        <input type="hidden" name="id" value="<?=$teacher["id"]?>">
        <button type=submit>edit</button>
    </form>

    <form action="delete.php" method="POST" style="displey:inline";>
        <input type="hidden" name="id" value="<?=$teacher["id"]?>">
        <button type=submit>delete</button>
    </form>
</td>
</tr>
<?php endforeach; ?>
</table>
<br>
<a href="add.php">qoshish</a>
