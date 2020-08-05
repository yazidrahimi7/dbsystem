<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client Added</title>
</head>

<body style="background-color:powderblue;">
<?php

include('connection.php');


$var_Policy_ID=$_POST['Policy_ID']; 
$var_PolicyType=$_POST['PolicyType']; 
$var_PolicyExp=$_POST['PolicyExp']; 
$var_PayOpt=$_POST['PayOpt'];
$var_Total=$_POST['Total'];
$var_Active=$_POST['Active'];


//insert data
$result = mysqli_query($connection, "INSERT INTO `policy`(Policy_ID,PolicyType,PolicyExp,PayOpt,Total,Active) 
VALUES ('$var_Policy_ID','$var_PolicyType','$var_PolicyExp','$var_PayOpt','$var_Total','$var_Active')" );

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
<form method="post" action="Add3.html">
<input type="submit" value="Insert Another Record">
</form><br />
<form method="post" action="index.php">
<input type="submit" value="Main Page">
</form>
</center>




</body>
</html>