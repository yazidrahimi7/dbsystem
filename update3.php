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
		
		$query = "SELECT * FROM `policy` WHERE id = '$id'";
		$result = mysqli_query($connection,$query) or die("Select Error ".mysqli_error($connection));
		$row = mysqli_fetch_array($result);
		
		if(isset($_POST['btUpdate'])) {
			$Policy_ID = $_POST['Policy_ID'];
			$PolicyType = $_POST['PolicyType'];
			$PolicyExp = $_POST['PolicyExp'];
			$PayOpt = $_POST['PayOpt'];
			$Total = $_POST['Total'];
			$Active = $_POST['Active'];
				
			$sql = "UPDATE `policy` SET Policy_ID='$Policy_ID',PolicyType='$PolicyType',PolicyExp='$PolicyExp',PayOpt='$PayOpt',Total='$Total',Active='$Active' WHERE id = $id";
			
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
<th>Policy ID</th>
	<th>Policy Type</th>
    <th>Policy Expired Date</th>
    <th>Payment Option</th>
    <th>Total (RM)</th>
    <th>Active</th>    
</tr>
<tr>
	<td><input type="number" name="Policy_ID" value="<?php echo $row['Policy_ID']; ?>"/></td>
    
    <td><input type="number" name="PolicyType" value="<?php echo $row['PolicyType']; ?>"/></td>
    
    <td><input type="date" name="PolicyExp" value="<?php echo $row['PolicyExp']; ?>" style="width: 110px;" /></td>
    
    <td><input type="text" name="PayOpt" value="<?php echo $row['PayOpt']; ?>"/></td>
	 
	<td><input type="number" name="Total" value="<?php echo $row['Total']; ?>" style="width: 100px;"/></td>
     
    <td><input type="text" name="Active" value="<?php echo $row['Active']; ?>" style="width: 50px;"/></td>
  
</tr></table></div>
<br />
  <input type="submit" name="btUpdate" data-inline="true" value="Update"><br /><br /></form>

</body>
</html>