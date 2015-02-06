



<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="new1.php" method="POST">
    ID:<input class="text" name="id" type="text"><br>
    UserName:<input class="text" name="username" type="text"><br>
    Salaary:<input class="salary" name="salary" type="text"><br>
    <input  value="submit" type="submit">
</form>
</body>



</html>

<?php
require 'employee.php';


if(isset($_POST["id"]) && isset($_POST["username"]) && isset($_POST["salary"])){
    $anEmployee=new employee();
    $anEmployee->id=$_POST["id"];
    $anEmployee->username=$_POST["username"];
    $anEmployee->salary=$_POST["salary"];
    echo "id: ",$anEmployee->id,", username: ",$anEmployee->username,", salary: ",$anEmployee->salary;






}


//{  $id=$_POST["id"];
//    $id=$_POST["username"];
//    $id=$_POST["salary"];
//    echo "id". $id, "username".$username,"salary".$salary;
//}
?>