<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "rejistration";

$conn=mysqli_connect($host,$username,$password,$dbname);
if($conn){
    echo"connection successfull";
}
else{
    echo"connection error";
}?>