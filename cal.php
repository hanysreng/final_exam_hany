
<?php
require "src/functions.php";

if(isset($_POST['btn'])){

$firstNumber = $_POST['number1'];
$secondNumber= $_POST['number2'];
$getResult = $_POST['input'];


$number = new functions($firstNumber,$secondNumber,$getResult );


$numberTotalMoney = $number->totalMoney();
$numberTotalResult= $number->totalResult();
$numberResult = $number->getResult();
              

}











