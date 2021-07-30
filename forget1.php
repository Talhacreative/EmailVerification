<?php
session_start();
include('connection.php');

if(isset($_POST['submit'])){//isset go ha check krta ha form ma koi null value to nahi ha

$email = mysqli_real_escape_string($conn,$_POST['email']);




$emailquery = "select * from rejister where email = '$email' ";

$query = mysqli_query($conn, $emailquery);

$emailcount  = mysqli_num_rows($query);

if($emailcount){

    $userdata = mysqli_fetch_array($query);
    
    $username = $userdata['username'];

    $token = $userdata['token'];

    $subject = "Password Reset";
    $body = "Hi,$username Click here to reset your password
    http://localhost/Emailverificationrejistration/reset_password.php?token=$token";
    $sender_email = "From: muhammadtalhakhan326@gmail.com";
    
    if (mail($email, $subject, $body, $sender_email)) {
       $_SESSION['msg'] = "Check your mail to set you password at $email" ;

       
    } else {
        echo "Email sending failed... to $email";
    }
}



else
{
   echo "you have not previous account";
    
}

}


?>