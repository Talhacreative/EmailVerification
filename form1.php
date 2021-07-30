<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])){//isset go ha check krta ha form ma koi null value to nahi ha

$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$mobile =mysqli_real_escape_string($conn, $_POST['mobile']);
$password =mysqli_real_escape_string($conn, $_POST['password']);

$pass = password_hash($password, PASSWORD_BCRYPT); //is ka faida ya ha ka hacker password nahi dekh pai ga

$token = bin2hex( random_bytes(15));



$emailquery = "select * from rejister where email = '$email' ";

$query = mysqli_query($conn, $emailquery);

$emailcount  = mysqli_num_rows($query);

if($emailcount>0){

    echo "email already exists";
}


else
{
   
    $sql="INSERT INTO rejister ( `username`,`email`,`mobile`, `password`,token , `status`) VALUES ('$username','$email', '$mobile', '$password', '$token', 'inactive')";


    $iquery = mysqli_query($conn, $sql); 
    
    if($iquery){
        
        $subject = "Email Activation";
        $body = "Hi,$username Click here to activate your account
        http://localhost/Emailverificationrejistration/activate.php?token=$token";
        $sender_email = "From: muhammadtalhakhan326@gmail.com";
        
        if (mail($email, $subject, $body, $sender_email)) {
           $_SESSION['msg'] = "Check your mail to activate your account $email" ;

           header('location:login.php');
        } else {
            echo "Email sending failed... to $email";
        }
    }
    else{
    
        echo"data  inserted successfully";
    }

    
}

}


?>