<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="POST">
    Principle Amount:<input class="text" name="principleAmount" type="text"><br>
    Interest Rate:<input class="text" name="interestRate" type="text"><br>
    Time Period:<input class="text" name="timePeriod" type="text"><br>
    <input  value="submit" type="submit">
</form>
</body>

</html>




<?php
require 'interest_calculator.php';
if(isset($_POST["principleAmount"]) && isset($_POST["interestRate"]) && isset($_POST["timePeriod"])){
    $interest=new interestCalculator();
    $interest->principleAmount=$_POST["principleAmount"];
    $interest->interestRate=$_POST["interestRate"];
    $interest->timePeriod=$_POST["timePeriod"];



    echo "  Total Amount: " .  $interest->getTotalAmount() . "  timePeriod:  " . $interest->timePeriod;
}
//{  $id=$_POST["id"];
//    $id=$_POST["username"];
//    $id=$_POST["salary"];
//    echo "id". $id, "username".$username,"salary".$salary;
//}
?>



