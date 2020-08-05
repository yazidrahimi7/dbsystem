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
		
		$query = "SELECT * FROM `bill` WHERE id = '$id'";
		$result = mysqli_query($connection,$query) or die("Select Error ".mysqli_error($connection));
		$row = mysqli_fetch_array($result);
		
		if(isset($_POST['btUpdate'])) {
			$Bill_ID = $_POST['Bill_ID'];
			$Policy_ID = $_POST['Policy_ID'];
			$DueDate = $_POST['DueDate'];
			$MinPay = $_POST['MinPay'];
			$Balance = $_POST['Balance'];
			$Status = $_POST['Status'];
				
			$sql = "UPDATE `bill` SET Bill_ID='$Bill_ID',Policy_ID='$Policy_ID',DueDate='$DueDate',MinPay='$MinPay',Balance='$Balance',Status='$Status' WHERE id = $id";
			
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
<th>Bill ID</th>
	<th>Policy ID</th>
    <th>Due Date</th>
    <th>Minimum Payment (RM)</th>
    <th>Balance (RM)</th>
    <th>Status</th>   
</tr>
<tr>
	<td><input type="number" name="Bill_ID" value="<?php echo $row['Bill_ID']; ?>"/></td>
    
    <td><input type="number" name="Policy_ID" value="<?php echo $row['Policy_ID']; ?>"/></td>
    
    <td><input type="date" name="DueDate" value="<?php echo $row['DueDate']; ?>" style="width: 110px;" /></td>
    
    <td><input type="number" name="MinPay" value="<?php echo $row['MinPay']; ?>"/></td>
	 
	<td><input type="number" name="Balance" value="<?php echo $row['Balance']; ?>" style="width: 100px;"/></td>
     
    <td><input type="text" name="Status" value="<?php echo $row['Status']; ?>" style="width: 50px;"/></td>
  
</tr></table></div>
<br />
  <input type="submit" name="btUpdate" data-inline="true" value="Update"><br /><br /></form>

</body>
</html>