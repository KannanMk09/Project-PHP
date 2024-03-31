<?php

//database Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "realestate";

$conn = new mysqli($servername,$username,$password,$database);

if($conn->connect_error){
    die("Connection Failed" . $conn->connect_error);
}
else{
    
}


?>