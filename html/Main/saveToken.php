 
<html>
<header><title>This is title</title></header>
<body>
<div>
<?php
$userId = $_SESSION['id'];
$servername = "advsoft.codryjh8aaby.us-west-2.rds.amazonaws.com";
$username = "devsoft";
$password = "Test2018";
$dbname = "mydb";
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


$token = preg_split("&", preg_split("=", preg_split("#",$actual_link)[1])[1])[0];
$userIdFitBit = preg_split("&", preg_split("=", preg_split("#",$actual_link)[1])[2])[0];

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


$sql = "update Users set token='$token' where name='$userId'; update Users set idFitBItUser='$userIdFitBit' where name='$userId';";
$result = $conn->query($sql);


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
	echo 'sql: '.$sql."<br>";
    echo 'User id fitbit: '.$userIdFitBit."<br>";
    echo 'token: '.$token."<br>";
    echo 'user app id: '.$userId ."<br>";
    echo "Error updating record: " . $conn->error;
}
#if ($result->num_rows > 0) {
    // output data of each row
#    while($row = $result->fetch_assoc()) {
#        echo "id: " . $row["user_id"]. " - name: " . $row["name"]. " - token: " . $row["token"]. "<br>";
#    }
#} else {
#    echo "0 results";
#}

$conn->close();

?> </div>


</body>
</html>
