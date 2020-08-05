<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client Added</title>
</head>

<body style="background-color:powderblue;">
<?php

include('connection.php');


$var_Driver_ID=$_POST['Driver_ID']; 
$var_Policy_ID=$_POST['Policy_ID']; 
$var_firstName=$_POST['firstName']; 
$var_lastName=$_POST['lastName'];
$var_DOB=$_POST['DOB'];
$var_PhoneNumber=$_POST['PhoneNumber'];
$var_LicenseNumber=$_POST['LicenseNumber'];
$var_Gender=$_POST['Gender'];

//insert data
$result = mysqli_query($connection, "INSERT INTO `driver`(Driver_ID,Policy_ID,firstName,lastName,DOB,PhoneNumber,LicenseNumber,Gender) 
VALUES ('$var_Driver_ID','$var_Policy_ID','$var_firstName','$var_lastName','$var_DOB','$var_PhoneNumber','$var_LicenseNumber','$var_Gender')" );

//checking success or not  
if ($result){
	//echo "Data recorded";
	header ("location:index.php?status=Success'");
	}
else {
	echo "Problem occurred! ".mysqli_error($connection);
}

mysqli_close($connection); 	
?>

<center>
<br />
<form method="post" action="Add.html">
<input type="submit" value="Insert Another Record">
</form><br />
<form method="post" action="index.php">
<input type="submit" value="Main Page">
</form>
</center>




</body>
=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client Added</title>
</head>

<body style="background-color:powderblue;">
<?php

include('connection.php');


$var_Driver_ID=$_POST['Driver_ID']; 
$var_Policy_ID=$_POST['Policy_ID']; 
$var_firstName=$_POST['firstName']; 
$var_lastName=$_POST['lastName'];
$var_DOB=$_POST['DOB'];
$var_PhoneNumber=$_POST['PhoneNumber'];
$var_LicenseNumber=$_POST['LicenseNumber'];
$var_Gender=$_POST['Gender'];

//insert data
$result = mysqli_query($connection, "INSERT INTO `driver`(Driver_ID,Policy_ID,firstName,lastName,DOB,PhoneNumber,LicenseNumber,Gender) 
VALUES ('$var_Driver_ID','$var_Policy_ID','$var_firstName','$var_lastName','$var_DOB','$var_PhoneNumber','$var_LicenseNumber','$var_Gender')" );

//checking success or not  
if ($result){
	//echo "Data recorded";
	header ("location:index.php?status=Success'");
	}
else {
	echo "Problem occurred! ".mysqli_error($connection);
}

mysqli_close($connection); 	
?>

<center>
<br />
<form method="post" action="Add.html">
<input type="submit" value="Insert Another Record">
</form><br />
<form method="post" action="index.php">
<input type="submit" value="Main Page">
</form>
</center>




</body>
>>>>>>> b9dfba62cee2e4fe7a9fb3eb8da25505b904b176
</html>