<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client Added</title>
</head>

<body style="background-color:powderblue;">
<?php

include('connection.php');


$var_Bill_ID=$_POST['Bill_ID']; 
$var_Policy_ID=$_POST['Policy_ID']; 
$var_DueDate=$_POST['DueDate']; 
$var_MinPay=$_POST['MinPay'];
$var_Balance=$_POST['Balance'];
$var_Status=$_POST['Status'];


//insert data
$result = mysqli_query($connection, "INSERT INTO `bill`(Bill_ID,Policy_ID,DueDate,MinPay,Balance,Status) 
VALUES ('$var_Bill_ID','$var_Policy_ID','$var_DueDate','$var_MinPay','$var_Balance','$var_Status')" );

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
<form method="post" action="Add4.html">
<input type="submit" value="Insert Another Record">
</form><br />
<form method="post" action="index.php">
<input type="submit" value="Main Page">
</form>
</center>




</body>
</html>