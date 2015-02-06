

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="POST">
    First Name:<input class="text" name="firstName" type="text"><br>
    Last Name:<input class="text" name="lastName" type="text"><br>
    Reg No:<input class="salary" name="regNo" type="text"><br>
    <input  value="submit" type="submit">
</form>
</body>



</html>

<?php
require 'student.php';


if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["regNo"])){
    $student1=new Student();
    $student1->firstName=$_POST["firstName"];
    $student1->lastName=$_POST["lastName"];
    $student1->regNo=$_POST["regNo"];

    echo "Full Name: " .  $student1->getFullName() . "Reg no: " . $student1->regNo;






}


//{  $id=$_POST["id"];
//    $id=$_POST["username"];
//    $id=$_POST["salary"];
//    echo "id". $id, "username".$username,"salary".$salary;
//}
?>