
<?php
session_start();
include ('connection.php');

if (isset($_POST['submit'])) {

	$email=$_POST['email'];
	$password=$_POST['password'];

	if(empty($email) || empty($password))
{
    header('location:main.php?blank');
    
}

else{
	$sql="SELECT * from rejister WHERE email='$email' && password='$password'";

	$result=(mysqli_query($conn, $sql));
	if ($result->num_rows>0) {


		$_SESSION["password"]=$password;
		header("Location:form.php");
		
		
		
	}
	
	else{
		//echo "Email and Password are incorrect";
		header('location:login.php?incorrect');
		
	}

	}

}
?>