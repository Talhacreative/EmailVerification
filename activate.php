<?php

session_start();


include('connection.php');

if(isset($_GET['token'])){

    $token = $_GET['token'];

    $updatequery = "update rejister set status = 'active' where token = '$token'";

    $query = mysqli_query($conn , $updatequery);

    if($query){

        if(isset($_SESSION['msg'])){

            $_SESSION['msg']="Account update successfully";

            header('location:login.php');
        }
        else{
            echo"Hey you boy";
            header('location:login.php');
        }}
        else{
            echo"query not executed succesfully";
            header('location:form.php');
        }
    
}

?>