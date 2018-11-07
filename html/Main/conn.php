
<?php
$DB_SERVER='advsoft.codryjh8aaby.us-west-2.rds.amazonaws.com';
$user='devsoft';
$pass='Test2018';
$db='mydb';
$con= mysqli_connect($DB_SERVER, $user, $pass, $db)or die("unable to connect");
if($con)
//echo "Connected successfullly to my databse testdb";
//$sql="insert into food(FoodID, FoodName) values(2,'Apple')";
$query=mysqli_query($con,'select foodName from FoodNutrition');
?>
<form>
    Food Item <br>
    <select name='List1' multiple >
       
 <?php
while($row= mysqli_fetch_array($query))
{
   


?>


 <option value="<?php echo $row['foodName']; ?>">"<?php echo $row['foodName']; ?>"</option>


<?php
}
?>
</select>
</form>