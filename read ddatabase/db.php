<?php

require('connect.php');
$sql="select * from talaba";

$result = $conn->query($sql);

$rows=$result->fetch_all(MYSQLI_ASSOC);



?>
<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Foydalanuvchilar</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: Arial, sans-serif;
      background: #f0f2f5;
      color: #333;
    }

    header {
      background: #2563eb;
      color: white;
      padding: 16px 32px;
      font-size: 20px;
      font-weight: bold;
    }

    .container {
      max-width: 900px;
      margin: 40px auto;
      padding: 0 16px;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .top-bar h2 {
      font-size: 22px;
    }

    .btn-add {
      background: #2563eb;
      color: white;
      padding: 10px 20px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
    }

    .btn-add:hover {
      background: #1d4ed8;
    }

    table {
      width: 100%;
      background: white;
      border-radius: 8px;
      overflow: hidden;
      border-collapse: collapse;
      box-shadow: 0 1px 4px rgba(0,0,0,0.1);
    }

    thead {
      background: #2563eb;
      color: white;
    }

    th, td {
      padding: 14px 18px;пппппппп
      text-align: left;
      border-bottom: 1px solid #e5e7eb;
      font-size: 14px;
    }

    tr:last-child td {
      border-bottom: none;
    }

    tr:hover td {
      background: #f9fafb;
    }

    .actions {
      display: flex;
      gap: 8px;пппп
    }

    .btn-edit {
      background: #f59e0b;
      color: white;
      padding: 6px 14px;
      border-radius: 5px;
      text-decoration: none;
      font-size: 13px;
    }

    .btn-edit:hover { background: #d97706; }

    .btn-delete {
      background: #ef4444;
      color: white;
      padding: 6px 14px;
      border-radius: 5px;
      text-decoration: none;
      font-size: 13px;
    }

    .btn-delete:hover { background: #dc2626; }
  </style>
</head>
<body>

<header>👥 Users CRUD</header>

<div class="container">
  <div class="top-bar">
    <h2>Foydalanuvchilar ro'yxati</h2>
    <a href="../db_connection/about.php" class="btn-add">+ Yangi qo'shish</a>
  </div>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>Email</th>
        <th>parol</th>
        <th>country</th>
        <th>city</th>
        
      </tr>
    </thead>
    <tbody>
      <!-- PHP da shu yerga foreach bilan chiqarish -->
       <?php  
      foreach ($rows as $row)
    {echo "<tr>";

echo "<td>" . $row["id"]."</td>";
echo "<td>" . $row["name"]."</td>";
echo "<td>" . $row["email"]."</td>";
echo "<td>" . $row["parol"]."</td>";
echo "<td>" . $row["country"]."</td>";
echo "<td>" . $row["city"]."</td>";


echo "</tr>";

    }
?>
   
    </tbody>
  </table>
</div>
ппппп
р


ррр
рррррррр
</body>
</html>


</table>
</body>
</html>



