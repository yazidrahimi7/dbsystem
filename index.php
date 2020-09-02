     <html>
     <head>
     <title></title>
     <meta http-equiv="Content-Type" content="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     </head>
 
<style>
 a:link {text-decoration: none; color:black;}
 a:visited {text-decoration: none;color:black;}
 a:hover {text-decoration: underline;color:black;}
 a:active {text-decoration: underline;color:black;}
 
	
	/* header dan footer */
div.container {
	width: 100%;
	border: 1px solid gray;
	
}

html {
	position:relative;	
}

.header {
	padding: 10px;
	color: white;
	background-color: black;
	text-align: center;
}


body {
	margin: 0 0 100px;
	padding: 0;
	overflow-x: hidden;	
	background-color: lightgrey;
}

 
   
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 90%;
    border: 1px solid #ddd;
}

th, td {
    text-align: center;
    padding: 10px;
    border-spacing: 10px;
}

tr:nth-child(even) {
    background-color: #a6a6a6;
}
</style>
     <body>
<div class="header">
	<h1>MotoCar Database</h1>
	<h4 style="text-align:right; margin:10px;"><a style="color:#FFF;" href="logout.php">Logout</a> </h4>
</div>
<!-- <span style="float:right; margin-right: 10px;">      <h4 align="center"><a style="color:#FFF;" href="logout.php">Logout</a> </h4> -->
  
<!-- display driver start -->
   
<center>
<h2>List Driver</h2>

 <h4 align="center"><a style="color:blue;" href="add.html">Add Driver</a> </h4>

 
<p>
<table width="1100" border="1" style="text-align:center; background-color:white;">
  <tr>
<tr>
	<th style="width:30px;">No.</th>
	<th>Driver ID</th>
	<th>Policy ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>DOB</th>
    <th>Phone No.</th>
    <th>License Number</th>
    <th>Gender</th>  
    <th colspan="2">Action</th>
</tr>

<?php
	include("connection.php");	
	$query = "SELECT * FROM `driver`";
	$result = mysqli_query ($connection, $query) or die ("SELECT Error ". mysqli_error($connection));
	$i=1;
	while ($row = mysqli_fetch_array($result)) {
		?>
      
   <tr>  
   		<td style="width:30px;" ><input name="id[]" type="hidden" value="<?php echo $row['id']; ?>" /><?php echo $row['id']; ?></td>
   		<td><?php echo $row['Driver_ID']; ?></td>
        <td><?php echo $row['Policy_ID']; ?></td>
        <td><?php echo $row['firstName']; ?></td>
        <td><?php echo $row['lastName']; ?></td>
        <td><?php echo $row['DOB']; ?></td>
        <td><?php echo $row['PhoneNumber']; ?></td>
        <td><?php echo $row['LicenseNumber']; ?></td>
        <td><?php echo $row['Gender']; ?></td>
        
   
   		<td width="69" style="text-decoration:none;">
	<?php echo "<a href=update.php?id1=".$row['id'].">". "Edit"; 
	?>
	</td>
	<td width="82" style="text-decoration:none;">
	<?php echo "<a href=confirm_delete.php?id2=".$row['id'].">". "Delete"; 
	?></td>
</tr>  
  <?php
	$i++;
	}	
	mysqli_close($connection);

  ?>
</table>
  </div>

 
</center>
   <!-- display driver end -->
 <!-- display vehicle start -->
   
<center>
<h2>List Vehicle</h2>
<h4 style="color:grey;">
Procedure 1 -  
<a style="color:blue;" href="add2.html">Add Vehicle</a> 
</h4>
<h4 style="color:grey;">
Procedure 2 -  
<a style="color:blue;" href="listvehicle.html">List Vehicle</a> 
</h4>

<table width="1100" border="1" style="text-align:center; background-color:white;">
  <tr>
<tr>
	<th style="width:30px;">No.</th>
	<th>Vehicle ID</th>
	<th>Driver ID</th>
    <th>Policy ID</th>
    <th>Year</th>
    <th>Model</th>
    <th>Plate No</th>
    <th>Active</th>
    
    <th colspan="2">Action</th>
</tr>

<?php
	include("connection.php");	
	$query = "SELECT * FROM `vehicle`";
	$result = mysqli_query ($connection, $query) or die ("SELECT Error ". mysqli_error($connection));
	$i=1;
	while ($row = mysqli_fetch_array($result)) {
		?>
      
   <tr>  
   		<td style="width:30px;" ><input name="id[]" type="hidden" value="<?php echo $row['id']; ?>" /><?php echo $row['id']; ?></td>
   		<td><?php echo $row['Vehicle_ID']; ?></td>
        <td><?php echo $row['Driver_ID']; ?></td>
        <td><?php echo $row['Policy_ID']; ?></td>
        <td><?php echo $row['Year']; ?></td>
        <td><?php echo $row['Model']; ?></td>
        <td><?php echo $row['PlateNo']; ?></td>
        <td><?php echo $row['Active']; ?></td>
    
        
   
   		<td width="69" style="text-decoration:none;">
	<?php echo "<a href=update2.php?id1=".$row['id'].">". "Edit"; 
	?>
	</td>
	<td width="82" style="text-decoration:none;">
	<?php echo "<a href=confirm_delete2.php?id2=".$row['id'].">". "Delete"; 
	?></td>
</tr>  
  <?php
	$i++;
	}	
	mysqli_close($connection);
	
  ?>
</table>
  </div>

 
</center>
   <!-- display vehicle end -->
    <!-- display policy start -->
   
<center>
<h2>List Policy</h2>
<h4 align="center"><a style="color:blue;" href="add3.html">Add Policy</a></h4>
<h4 style="color:grey;">Function 1 - <a style="color:blue;" href="disc.html">Discount</a></h4>
<p>
<table width="1100" border="1" style="text-align:center; background-color:white;">
  <tr>
<tr>
	<th style="width:30px;">No.</th>
	<th>Policy ID</th>
	<th>Policy Type</th>
    <th>Policy Expired Date</th>
    <th>Payment Option</th>
    <th>Total (RM)</th>
    <th>Active</th>    
    <th colspan="2">Action</th>
</tr>

<?php
	include("connection.php");	
	$query = "SELECT * FROM `policy`";
	$result = mysqli_query ($connection, $query) or die ("SELECT Error ". mysqli_error($connection));
	$i=1;
	while ($row = mysqli_fetch_array($result)) {
		?>
      
   <tr>  
   		<td style="width:30px;" ><input name="id[]" type="hidden" value="<?php echo $row['id']; ?>" /><?php echo $row['id']; ?></td>
        <td><?php echo $row['Policy_ID']; ?></td>
        <td><?php echo $row['PolicyType']; ?></td>
        <td><?php echo $row['PolicyExp']; ?></td>
        <td><?php echo $row['PayOpt']; ?></td>
        <td><?php echo $row['Total']; ?></td>
        <td><?php echo $row['Active']; ?></td>
    
        
   
   		<td width="69" style="text-decoration:none;">
	<?php echo "<a href=update3.php?id1=".$row['id'].">". "Edit"; 
	?>
	</td>
	<td width="82" style="text-decoration:none;">
	<?php echo "<a href=confirm_delete3.php?id2=".$row['id'].">". "Delete"; 
	?></td>
</tr>  
  <?php
	$i++;
	}	
	mysqli_close($connection);

  ?>
</table>
  </div>

 
</center>
   <!-- display policy end -->
       <!-- display bill start -->
   
<center>
<h2>List Bill</h2>
<h4 align="center"><a style="color:blue;" href="add4.html">Add Bill</a> </h4>
<h4 style="color:grey;">Function 2 - <a style="color:blue;" href="status.html">Check Status</a> </h4>
<p>
<table width="1100" border="1" style="text-align:center; background-color:white;">
  <tr>
<tr>
	<th style="width:30px;">No.</th>
	<th>Bill ID</th>
	<th>Policy ID</th>
    <th>Due Date</th>
    <th>Minimum Payment (RM)</th>
    <th>Balance (RM)</th>
    <th>Status</th>    
    <th colspan="2">Action</th>
</tr>

<?php
	include("connection.php");	
	$query = "SELECT * FROM `bill`";
	$result = mysqli_query ($connection, $query) or die ("SELECT Error ". mysqli_error($connection));
	$i=1;
	while ($row = mysqli_fetch_array($result)) {
		?>
      
   <tr>  
   		<td style="width:30px;" ><input name="id[]" type="hidden" value="<?php echo $row['id']; ?>" /><?php echo $row['id']; ?></td>
        <td><?php echo $row['Bill_ID']; ?></td>
        <td><?php echo $row['Policy_ID']; ?></td>
        <td><?php echo $row['DueDate']; ?></td>
        <td><?php echo $row['MinPay']; ?></td>
        <td><?php echo $row['Balance']; ?></td>
        <td><?php echo $row['Status']; ?></td>
    
        
   
   		<td width="69" style="text-decoration:none;">
	<?php echo "<a href=update4.php?id1=".$row['id'].">". "Edit"; 
	?>
	</td>
	<td width="82" style="text-decoration:none;">
	<?php echo "<a href=confirm_delete4.php?id2=".$row['id'].">". "Delete"; 
	?></td>
</tr>  
  <?php
	$i++;
	}	
	mysqli_close($connection);

  ?>
</table>
  </div>

 
</center>
   <!-- display bill end -->      
   <!-- display driver address start -->
   
<center>
<h2>List Driver Address</h2>
<h4 align="center"><a style="color:blue;" href="add5.html">Add Driver Address</a> </h4>
<p>
<table width="1100" border="1" style="text-align:center; background-color:white;">
  <tr>
<tr>
	<th style="width:30px;">No.</th>
	<th>Driver Address ID </th>
	<th>Driver ID</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zipcode</th>    
    <th>Country</th>
    <th colspan="2">Action</th>
</tr>

<?php
	include("connection.php");	
	$query = "SELECT * FROM `driaddr`";
	$result = mysqli_query ($connection, $query) or die ("SELECT Error ". mysqli_error($connection));
	$i=1;
	while ($row = mysqli_fetch_array($result)) {
		?>
      
   <tr>  
   		<td style="width:30px;" ><input name="id[]" type="hidden" value="<?php echo $row['id']; ?>" /><?php echo $row['id']; ?></td>
        <td><?php echo $row['DriAdd_ID']; ?></td>
        <td><?php echo $row['Driver_ID']; ?></td>
        <td style="text-align: left;"><?php echo $row['Address']; ?></td>
        <td><?php echo $row['City']; ?></td>
        <td><?php echo $row['State']; ?></td>
        <td><?php echo $row['Zipcode']; ?></td>
        <td><?php echo $row['Country']; ?></td>
        
   
   		<td width="69" style="text-decoration:none;">
	<?php echo "<a href=update5.php?id1=".$row['id'].">". "Edit"; 
	?>
	</td>
	<td width="82" style="text-decoration:none;">
	<?php echo "<a href=confirm_delete5.php?id2=".$row['id'].">". "Delete"; 
	?></td>
</tr>  
  <?php
	$i++;
	}	
	mysqli_close($connection);
	ob_end_flush();
  ?>
</table>
  </div>

 
</center>
   <!-- display driver address end -->
 
     </body>
    