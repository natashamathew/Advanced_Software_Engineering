<?php
$P=filter_input(INPUT_POST, 'List1');

$Q=filter_input(INPUT_POST,'quant');

$DB_SERVER='advsoft.codryjh8aaby.us-west-2.rds.amazonaws.com';
$user='devsoft';
$pass='Test2018';
$db='mydb';
$con= mysqli_connect($DB_SERVER, $user, $pass, $db)or die("unable to connect");

$query=mysqli_query($con,'select IDFoodNutrition from FoodNutrition');



$sql="insert into FoodLog(IDFoodNutrition, quantity) values('$P','$Q')";

$query=mysqli_query($con,$sql);

if($query)
    echo "Data inserted successfully";
?>









