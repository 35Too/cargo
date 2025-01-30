<?php
$hostname ="localhost";
$username="Kipyegon";
$password="Towel350";
$dbname="cargo";

$conn=mysqli_connect($hostname, $username, $password, $dbname);

if($conn->connection_error){
    die("Connection failed:".$conn->connection_error);
}
echo"Connection successful";
