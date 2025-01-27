<?php
$hostname ="localhost";
$username = "root";
$password = "";
$dbname = "adminpanel";
$conn = mysqli_connect($hostname,$username,$password ,$dbname);
if(!$conn){
    echo "Connection Failed !";

} 
?>