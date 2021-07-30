<?php

session_start();
 include('connection.php');

 if(count($_POST)>0){// count go ha wo table ma data ko count krta ha
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];



 $up="UPDATE rejister set username= '$username',mobile='$mobile',password='$password' WHERE email='".$_POST['email']."'";
 
 
 $iquery = mysqli_query($conn,$up);
 if($iquery){
        
    $subject = "Email Activation";
    $body = "Hi,$username Your account was updated by admin.
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

 $record="SELECT * FROM rejister WHERE email='".$_GET['email']."'";
    $x=(mysqli_query($conn,$record));
    $row=mysqli_fetch_array($x);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" href="form.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Textile Pakistan</title>
    <link rel="icon" href="image/icon.png">
    <link rel="stylesheet" href="userupdate.css">
    
</head>
<body>

  
    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return myfun()"> 
    <section class="intro">

        <div class="inner" >

            <div class="content" style="background-color:lightblue">

             <img src="image/icon.png" alt="" style="border-radius:30px; height:160px"><br><br><br><br>
             
             <input type="hidden"  placeholder="email"  id="email" name="email"  style="border-radius:30px; " value="<?php echo $row['email']; ?>
" ><br>
             <span id="message2"></span><br><br>

             <input type="text" placeholder="username" class="input" id="username" name="username" style="border-radius:30px;"  value="<?php echo $row['username']; ?>
"><br>
             <span id="message"></span><br><br>

             <input type="text" placeholder="mobile" class="input" id="mobile" name="mobile" style="border-radius:30px;"  value="<?php echo $row['mobile']; ?>
"><br>
             <span id="message"></span><br><br>


             <input type="password" placeholder="Password" class="input" id="password" name="password" style="border-radius:30px;" value="<?php echo $row['password']; ?>
"  ><br>
             <span id="message1"></span><br><br>

              <br>
            
             <a href="http://localhost/Emailverificationrejistration/form.php">  <input type="submit" class="btn" name="submit" value="submit" style="border-radius:50px; width:150px; height:50px ;  background-color: rgb(28, 58, 97); font-size:20px"> <br></a>
            
           
            </div>
       
        </div>
    </section>
    </form>
    <input type="submit" class="btn" name="submit" value="Previous Page" style="border-radius:50px; width:150px; height:50px"> <br>
</body>
</html>