<?php

include('connection.php');

if(isset($_POST['submit'])){//isset go ha check krta ha form ma koi null value to nahi ha

if(isset($_POST['token'])){

    $token = $_POST['token'];


$newpassword =mysqli_real_escape_string($conn, $_POST['password']);



$updatequery="UPDATE rejister set password= '$newpassword' WHERE token='$token'";

$iquery = mysqli_query($conn, $updatequery);

if($iquery){
header('location:login.php');
}
else{
echo("Your password is not updated");
header('location:reset_password.php');
}

}
else{
echo "no token found";
header('location:reset_password.php');
}

}
else{
echo "please enter data";
}

?>