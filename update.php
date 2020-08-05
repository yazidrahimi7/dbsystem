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
		
		$query = "SELECT * FROM `driver` WHERE id = '$id'";
		$result = mysqli_query($connection,$query) or die("Select Error ".mysqli_error($connection));
		$row = mysqli_fetch_array($result);
		
		if(isset($_POST['btUpdate'])) {
			$Driver_ID = $_POST['Driver_ID'];
			$Policy_ID = $_POST['Policy_ID'];
			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];
			$DOB = $_POST['DOB'];
			$PhoneNumber = $_POST['PhoneNumber'];
			$LicenseNumber = $_POST['LicenseNumber'];
			$Gender = $_POST['Gender'];
			
			$sql = "UPDATE `driver` SET Driver_ID='$Driver_ID',Policy_ID='$Policy_ID',firstName='$firstName',lastName='$lastName',DOB='$DOB',PhoneNumber='$PhoneNumber',LicenseNumber='$LicenseNumber',Gender='$Gender' WHERE id = $id";
			
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
 <th>Driver ID</th>
    <th>Policy ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>DOB</th>
    <th>Phone No.</th>
    <th>License Number</th>
    <th>Gender</th>
</tr>
<tr>
	<td><input type="number" name="Driver_ID" value="<?php echo $row['Driver_ID']; ?>"/></td>
    
   
    <td><input type="number" name="Policy_ID" value="<?php echo $row['Policy_ID']; ?>"/></td>
    
    <td><input type="text" name="firstName" value="<?php echo $row['firstName']; ?>" style="width: 80px;" id="Plate_No" onkeyup="myFunction()"/></td>
    
    <td><input type="text" name="lastName" value="<?php echo $row['lastName']; ?>" style="width: 110px;" /></td>
    
    <td><input type="date" name="DOB" value="<?php echo $row['DOB']; ?>"/></td>
    
    <td><input type="text" name="PhoneNumber" value="<?php echo $row['PhoneNumber']; ?>" style="width: 80px;"/></td>
    
    <td><input type="number" name="LicenseNumber" value="<?php echo $row['LicenseNumber']; ?>" style="width: 100px;"/></td>
    
    <td><input type="text" name="Gender" value="<?php echo $row['Gender']; ?>" style="width: 50px;"/></td>
    </tr></table></div>
<br />
  <input type="submit" name="btUpdate" data-inline="true" value="Update"><br /><br /></form>

</body>
</html>