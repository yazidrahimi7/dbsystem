<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update Infomation</title>
</head>
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 16px;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}
</style>




<?php
	include("connection.php");
		$id = $_GET['id1'];
		
		$query = "SELECT * FROM `driaddr` WHERE id = '$id'";
		$result = mysqli_query($connection,$query) or die("Select Error ".mysqli_error($connection));
		$row = mysqli_fetch_array($result);
		
		if(isset($_POST['btUpdate'])) {
			$DriAdd_ID = $_POST['DriAdd_ID'];
			$Driver_ID = $_POST['Driver_ID'];
			$Address = $_POST['Address'];
			$City = $_POST['City'];
			$State = $_POST['State'];
			$Zipcode = $_POST['Zipcode'];
			$Country = $_POST['Country'];

			$sql = "UPDATE `driaddr` SET DriAdd_ID='$DriAdd_ID',Driver_ID='$Driver_ID',Address='$Address',City='$City',State='$State',Zipcode='$Zipcode',Country='$Country' WHERE id = $id";
			
			$result = mysqli_query($connection,$sql);
			
			if($result == TRUE) {
				header ("location:index.php");}
			else
				echo "Update Error :".mysqli_error($connection);
			}	
		?>

<body>
<body style="background-color:powderblue;">
<form method="post" action="index.php">
<input type="submit" value="Back" >
</form>
<center>
<div data-role="page" id="page">
	<div data-role="header" data-theme="b">
    
		<h3>Please fill in the blank</h3>
	</div>
</p></h3>
<br />
<div data-role="main" class="ui-content">

<form method="post" action="">
<div class="ui-field-contain">


<table width="100" border="1" style="text-align:center; background-color:white;">
<tr>
<tr>
<th>Driver Address ID </th>
	<th>Driver ID</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zipcode</th>    
    <th>Country</th>  
</tr>
<tr>
	<td><input type="number" name="DriAdd_ID" value="<?php echo $row['DriAdd_ID']; ?>"/></td>
    
    <td><input type="number" name="Driver_ID" value="<?php echo $row['Driver_ID']; ?>"/></td>
    
    <td><input type="text" name="Address" value="<?php echo $row['Address']; ?>" style="width: 110px;" /></td>
    
    <td><input type="text" name="City" value="<?php echo $row['City']; ?>"/></td>
	 
	<td><input type="text" name="State" value="<?php echo $row['State']; ?>" style="width: 100px;"/></td>
     
    <td><input type="number" name="Zipcode" value="<?php echo $row['Zipcode']; ?>" style="width: 50px;"/></td>
   
	<td><input type="text" name="Country" value="<?php echo $row['Country']; ?>" style="width: 50px;"/></td>

</tr></table></div>
<br />
  <input type="submit" name="btUpdate" data-inline="true" value="Update"><br /><br /></form>

</body>
</html>