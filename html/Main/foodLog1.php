

<!DOCTYPE html>
<html>

<head>
    <title> Smart </title>
</head>

<body>
    <h1><strong> FOOD LOGGING </strong> </h1>

<?php
$DB_SERVER='advsoft.codryjh8aaby.us-west-2.rds.amazonaws.com';
$user='devsoft';
$pass='Test2018';
$db='mydb';
$con= mysqli_connect($DB_SERVER, $user, $pass, $db)or die("unable to connect");
if($con)
//echo "Connected successfullly to my databse testdb";
//$sql="insert into food(FoodID, FoodName) values(2,'Apple')";
$query=mysqli_query($con,'select IDFoodNutrition from FoodNutrition');
$query1=mysqli_query($con,'select foodName from FoodNutrition');
?>
    <form method="Post" Action="conn_foodlog1.php">
    Food Item <br>
    <select Name="List1" multiple>
       
 <?php
while($row= mysqli_fetch_array($query1))
{
   


?>


 <option value="<?php echo $row['IDFoodNutrition']; ?>">"<?php echo $row['foodName']; ?>"</option>


<?php
}
?>
 
</select>
    <p> Quantity   
    <input name="quant" type="text" size="5"> </p> 
    
    <br>
            <input Name="S1" Type="Submit" value="Submit">

    <br>   
    
</form>
 <!-- <Form Method="Post" Action="h3.php"  > -->
            
  
 <p style="background-color:Tomato;"> Healthy Food...</p>   

 

<img src="food1.png" width="400" height="400">

</body>

</html>