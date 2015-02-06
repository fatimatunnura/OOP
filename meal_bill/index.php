<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="POST">
    Rice:<input class="text" name="rice" type="text"><br>
    Vegetable:<input class="text" name="vegetable" type="text"><br>
    Fish:<input class="text" name="fish" type="text"><br>
    Meat:<input class="text" name="meat" type="text"><br>
    Vat:<input class="text" name="vat" type="text"><br>


    <input  value="submit" type="submit">
</form>
</body>

</html>




<?php
require 'mealbill.php';
if(isset($_POST["rice"]) && isset($_POST["vegetable"]) && isset($_POST["fish"]) && isset($_POST["meat"]) && isset($_POST["vat"])){
    $bill=new mealBill();
    $bill->rice=$_POST["rice"];
    $bill->vegetable=$_POST["vegetable"];
    $bill->fish=$_POST["fish"];
    $bill->meat=$_POST["meat"];
    $bill->vat=$_POST["vat"];
    $bill->grosstotal=$_POST["grosstotal"];
    $bill->payableamount=$_POST["payableamount"];






    echo "  Gross Total: " .  $bill->getGrossTotal() . "  Payable Amount :  " . $bill->getPayableAmount();
}

?>



