<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Client Added</title>
</head>

<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 80%;
    border: 1px solid #ddd;
	margin-top: 50px;
	margin-bottom: 20px;

}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
</style>



<body style="background-color:powderblue;">
<form method="post" action="disc.html">
<input type="submit" value="Back" >
</form>


<center>
	<table width="100" border="1" style="text-align:center; background-color:white;">
	<tr>	
        <th>Name</th>
		<th>Payment Option</th>
		<th>Total (RM)</th>
        <th>Discount Amount (RM)</th>
    </tr>
        
<?php

include('connection.php');
$var_Policy_ID=$_POST['Policy_ID']; 

$query = "SELECT *, disc(PayOpt) AS `disc` 
          FROM `policy` natural join `driver`
          WHERE Policy_ID = $var_Policy_ID";
$result = mysqli_query ($connection, $query) or die ("SELECT Error ". mysqli_error($connection));

//checking success or not  
if ($result){ 
   
     if ($row = mysqli_fetch_array($result)) {
    
        echo "<tr><td>" .  $row['firstName']. " " . $row['lastName'], "</td>"; 
        echo "<td>". $row['PayOpt'] . "</td>";
        echo "<td>". $row['Total']. "</td>";
        echo "<td>", $row['Total'] - ($row['Total'] * $row['disc']) ,"</td></table>";
          
	} else {
            echo 
            "<script> 
            alert('ID not found! Please check your input.');
			window.location.href='disc.html';
			</script>";
    }
    	
 } else {
        echo "Problem occurred! ".mysqli_error($connection);
    }


mysqli_close($connection); 	
?>

<center>
<br />
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

<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 80%;
    border: 1px solid #ddd;
	margin-top: 50px;
	margin-bottom: 20px;

}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
</style>



<body style="background-color:powderblue;">
<form method="post" action="disc.html">
<input type="submit" value="Back" >
</form>


<center>
	<table width="100" border="1" style="text-align:center; background-color:white;">
	<tr>	
        <th>Name</th>
		<th>Payment Option</th>
		<th>Total (RM)</th>
        <th>Discount Amount (RM)</th>
    </tr>
        
<?php

include('connection.php');
$var_Policy_ID=$_POST['Policy_ID']; 

$query = "SELECT *, disc(PayOpt) AS `disc` 
          FROM `policy` natural join `driver`
          WHERE Policy_ID = $var_Policy_ID";
$result = mysqli_query ($connection, $query) or die ("SELECT Error ". mysqli_error($connection));

//checking success or not  
if ($result){ 
   
     if ($row = mysqli_fetch_array($result)) {
    
        echo "<tr><td>" .  $row['firstName']. " " . $row['lastName'], "</td>"; 
        echo "<td>". $row['PayOpt'] . "</td>";
        echo "<td>". $row['Total']. "</td>";
        echo "<td>", $row['Total'] - ($row['Total'] * $row['disc']) ,"</td></table>";
          
	} else {
            echo 
            "<script> 
            alert('ID not found! Please check your input.');
			window.location.href='disc.html';
			</script>";
    }
    	
 } else {
        echo "Problem occurred! ".mysqli_error($connection);
    }


mysqli_close($connection); 	
?>

<center>
<br />
<form method="post" action="index.php">
<input type="submit" value="Main Page">
</form>
</center>

</body>
>>>>>>> b9dfba62cee2e4fe7a9fb3eb8da25505b904b176
</html>