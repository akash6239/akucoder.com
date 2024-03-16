<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "akucoder";

$response = mysqli_connect($server,$username, $password, $database);
if ($response){
    echo  "connected";
}else{
    echo "not connected";
}
?>