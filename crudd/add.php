<?php
require("conn.php");


if($_POST){
    $name=$_POST["name"];
     $age=$_POST["age"];
      $tell=$_POST["tell"];
       $salary=$_POST["salary"];
}

$sql= "INSERT INTO teachers(name,age,tell,salary)
VALUES ('$name','$age','$tell','$salary')";

if($conn->query($sql)===TRUE){
    
}else{
    echo "xatolik" . $conn->error;
}

?>
<h2>ADD STUDENTS</h2>

<form method="POST">
    <input type="text" name="name" placeholder="name" ><br><br>
        <input type="number" name="age" placeholder="age" ><br><br>
            <input type="number" name="tell" placeholder="tell" ><br><br>
                <input type="number" name="salary" placeholder="salary" ><br><br>
                <button type=submit>qo'shish</button>
</form>



