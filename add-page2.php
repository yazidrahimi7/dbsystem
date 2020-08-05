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


$var_Vehicle_ID=$_POST['Vehicle_ID']; 
$var_Driver_ID=$_POST['Driver_ID']; 
$var_Policy_ID=$_POST['Policy_ID']; 
$var_Year=$_POST['Year'];
$var_Model=$_POST['Model'];
$var_PlateNo=$_POST['PlateNo'];
$var_Active=$_POST['Active'];

//insert data
// $result = mysqli_query($connection, "INSERT INTO `vehicle`(Vehicle_ID,Driver_ID,Policy_ID,Year,Model,PlateNo,Active) 
// VALUES ('$var_Vehicle_ID','$var_Driver_ID','$var_Policy_ID','$var_Year','$var_Model','$var_PlateNo','$var_Active')" );

$result =  mysqli_query($connection,"CALL addnewvehicle('$var_Vehicle_ID','$var_Driver_ID','$var_Policy_ID','$var_Year','$var_Model','$var_PlateNo',
								'$var_Active')");

//checking success or not  
if ($result){
	// echo	'alert("data recorded")';
	header ("location:index.php?status=Success'");
	}
else {
	echo "Problem occurred! ".mysqli_error($connection);
}

mysqli_close($connection); 	
?>

<center>
<br />
<form method="post" action="Add2.html">
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


$var_Vehicle_ID=$_POST['Vehicle_ID']; 
$var_Driver_ID=$_POST['Driver_ID']; 
$var_Policy_ID=$_POST['Policy_ID']; 
$var_Year=$_POST['Year'];
$var_Model=$_POST['Model'];
$var_PlateNo=$_POST['PlateNo'];
$var_Active=$_POST['Active'];

//insert data
// $result = mysqli_query($connection, "INSERT INTO `vehicle`(Vehicle_ID,Driver_ID,Policy_ID,Year,Model,PlateNo,Active) 
// VALUES ('$var_Vehicle_ID','$var_Driver_ID','$var_Policy_ID','$var_Year','$var_Model','$var_PlateNo','$var_Active')" );

$result =  mysqli_query($connection,"CALL addnewvehicle('$var_Vehicle_ID','$var_Driver_ID','$var_Policy_ID','$var_Year','$var_Model','$var_PlateNo',
								'$var_Active')");

//checking success or not  
if ($result){
	// echo	'alert("data recorded")';
	header ("location:index.php?status=Success'");
	}
else {
	echo "Problem occurred! ".mysqli_error($connection);
}

mysqli_close($connection); 	
?>

<center>
<br />
<form method="post" action="Add2.html">
<input type="submit" value="Insert Another Record">
</form><br />
<form method="post" action="index.php">
<input type="submit" value="Main Page">
</form>
</center>




</body>
>>>>>>> b9dfba62cee2e4fe7a9fb3eb8da25505b904b176
</html>