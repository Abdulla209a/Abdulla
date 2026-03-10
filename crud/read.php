<?php
require("conn.php");

$result = $conn->query("SELECT * FROM students");
$talabalar = $result->fetch_all(MYSQLI_ASSOC);
?>

<h2>STUDENTS LIST</h2>
<table border="1">
<tr>
<th>ID</th>
<th>name</th>
<th>email</th>
<th>age</th>
<th>amallar</th>
</tr>

<?php foreach($talabalar as $talaba): ?>
<tr>
<td><?= $talaba["id"] ?></td>
<td><?= $talaba["name"] ?></td>
<td><?= $talaba["email"] ?></td>
<td><?= $talaba["age"] ?></td>
<td>
<form action="update.php" method="POST" style="display:inline;">
<input type="hidden" name="id" value="<?= $talaba["id"] ?>">
<button type="submit">edit</button>
</form>

<form action="delete.php" method="POST" style="display:inline;">
<input type="hidden" name="id" value="<?= $talaba["id"] ?>">
<button type="submit">delete</button>
</form>
</td>
</tr>
<?php endforeach; ?>
</table>

<br>
<a href="add.php">qoshish</a>