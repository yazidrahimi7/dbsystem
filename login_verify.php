<?php 
include('connection.php');
$var_username=$_POST['uname']; 
$var_password=$_POST['pswd']; 
$query =  "SELECT * FROM `login`";
$result = mysqli_query ($connection, $query) or die ("SELECT Error ". mysqli_error($connection));
	


//checking success or not  
if ($result && $var_username === 'admin' && $var_password === 'admin'){

	header("location:home.php");
	} else {
			echo 
			"<script> 
			alert('Wrong username or password!');
			window.location.href='index.php';
			</script>";
		
	}
mysqli_close($connection); 	
?>
?>