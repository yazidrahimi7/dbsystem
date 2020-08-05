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


$var_DriAdd_ID=$_POST['DriAdd_ID']; 
$var_Driver_ID=$_POST['Driver_ID']; 
$var_Address=$_POST['Address']; 
$var_City=$_POST['City'];
$var_State=$_POST['State'];
$var_Status=$_POST['Zipcode'];
$var_Country=$_POST['Country'];

//insert data
$result = mysqli_query($connection, "INSERT INTO `driaddr`(DriAdd_ID,Driver_ID,Address,City,State,Zipcode,Country) 
VALUES ('$var_DriAdd_ID','$var_Driver_ID','$var_Address','$var_City','$var_State','$var_Zipcode','$var_Country')" );

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
<form method="post" action="Add5.html">
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


$var_DriAdd_ID=$_POST['DriAdd_ID']; 
$var_Driver_ID=$_POST['Driver_ID']; 
$var_Address=$_POST['Address']; 
$var_City=$_POST['City'];
$var_State=$_POST['State'];
$var_Status=$_POST['Zipcode'];
$var_Country=$_POST['Country'];

//insert data
$result = mysqli_query($connection, "INSERT INTO `driaddr`(DriAdd_ID,Driver_ID,Address,City,State,Zipcode,Country) 
VALUES ('$var_DriAdd_ID','$var_Driver_ID','$var_Address','$var_City','$var_State','$var_Zipcode','$var_Country')" );

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
<form method="post" action="Add5.html">
<input type="submit" value="Insert Another Record">
</form><br />
<form method="post" action="index.php">
<input type="submit" value="Main Page">
</form>
</center>




</body>
>>>>>>> b9dfba62cee2e4fe7a9fb3eb8da25505b904b176
</html>