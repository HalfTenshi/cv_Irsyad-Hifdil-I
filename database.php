<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "tugass3t2";

$conn = mysqli_connect($hostname,$username,$password,$database_name);

if($conn->connect_error){
    echo "databaserusak";
    die("error");
}
?>