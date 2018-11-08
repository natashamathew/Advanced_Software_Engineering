 
<html>
<header><title>This is title</title></header>
<body>
Hello world
<div> <script>
// get the url
var url = window.location.href;

//getting the access token from url
var access_token = url.split("#")[1].split("=")[1].split("&")[0];

// get the userid
var userId = url.split("#")[1].split("=")[2].split("&")[0];

console.log(access_token);
console.log(userId);
</script>

<?php
$userId = '202'
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


$sql = "update Users set token='" + $token + "' where name=" + $userId + ";update Users set idFitBItUser='" + $userIdFitBit + "' where name=" + $userId + ";";
$result = $conn->query($sql);


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
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
