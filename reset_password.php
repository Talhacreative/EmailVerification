<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="form.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Talha Khan</title>
    
    <link rel="icon" href="image/icon.png">


</head>
<body style="background-color:grey">

<form action="" method="POST"  style="margin-top:25px;"> 
<section class="intro">

    <div class="inner" >

        <div class="content" style="background-color:lightblue">

         
         <input type="password" placeholder="Password" class="input" id="password" name="password" style="border-radius:30px; background-color:orange"><br>
         
          
         

         

          
        
         <a href="http://localhost/5th%20sem%20project/screen%20divider.php">  <input type="submit" class="btn" name="submit" value="Update paasword" style="border-radius:50px; width:150px; height:50px"> <br></a>
        
       
        </div>
   
    </div>
</section>
</form>

</body>
</html>
<?php

include('connection.php');

if(isset($_POST['submit'])){//isset go ha check krta ha form ma koi null value to nahi ha

if(isset($_GET['token'])){

    $token = $_GET['token'];


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