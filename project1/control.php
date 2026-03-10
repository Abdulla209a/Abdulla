<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="topnav">
    <a href="create.php" class="nav-link">Name</a>
    <a href="show.php" class="nav-link">Email</a>
    
</nav>


<style>
    .topnav {
        background-color: #333;
        overflow: hidden;
    }
    .topnav a {
        float: left;                        
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }
</style>

   <form action="show.php" method="POST"><table class="table">
    

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Amirxon</td>
      <td>Amirxon@gmail.com</td>
      <i class="bi bi-trash"></i>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jonibek</td>
      <td>jonibek@gmail.com</td>
     
    </tr>
    <tr>
    
     
    </tr>
  </tbody>
</table>          </form>

</body>
</html>
  