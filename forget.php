<?php

session_start();

?>
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
    
<form action="forget1.php" method="POST" enctype="multipart/form-data" onsubmit="return myfun()" style="margin-top:25px;"> 
    <section class="intro">

        <div class="inner" >

            <div class="content" style="background-color:lightblue">

             
             <input type="mail" placeholder="Email" class="input" id="email" name="email" style="border-radius:30px;"><br>
    

             
             

             

              
            
             <a href="http://localhost/5th%20sem%20project/screen%20divider.php">  <input type="submit" class="btn" name="submit" value="Submit" style="border-radius:50px; width:150px; height:50px"> <br></a>
            
           
            </div>
       
        </div>
    </section>
    </form>
    <br><br><br><br><br><br><br>
    



</body>
</html>