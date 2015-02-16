<html> 

<head>
 
    <title> Proposal DB - Login Screen </title>
    
    <link rel="stylesheet" type="text/css" href="../style.css" />

</head>

<body >

<div id="container">

	<!-- ###  Header  ### -->
	
  <div id="header">	
	
		<h1 align="left">Proposal Database</h1>
		<p align="left">Your Customer Orginization System</p>

		<!-- ### Top menu ### -->
		
		<div id="topmenu">
		<ul>
			<li><a href="../Client/list.php"><span>Client Table</span></a></li>	
			<li><a href="../Purposal/list.php"><span>Proposal Table</span></a></li>	
			<li><a href="../Quote/list.php"><span>Quote Table</span></a></li>	

		</ul>	
		</div>

</div>
	<div id="contentcontainer">
	
	
<? 
include('config.php'); 
if (isset($_GET['id']) ) { 
$id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `client` SET  `Name` =  '{$_POST['Name']}' ,  `Company` =  '{$_POST['Company']}' ,  `JobTitle` =  '{$_POST['JobTitle']}' ,  `Email` =  '{$_POST['Email']}' ,  `Phone` =  '{$_POST['Phone']}' ,  `Street` =  '{$_POST['Street']}' ,  `City` =  '{$_POST['City']}' ,  `State` =  '{$_POST['State']}' ,  `Zip` =  '{$_POST['Zip']}'   WHERE `id` = '$id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "<img src='../images/success.png'><br />" : "<img src='../images/error.png'> <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `client` WHERE `id` = '$id' ")); 
?>

<form action='' method='POST' id="stylized" class="myform" > 
 

<label>Name <span class="small">Add Your Clients Name</span> </label>
	<input type='text' name='Name' value='<?= stripslashes($row['Name']) ?>' /> 

<label>Company <span class="small">Add Your Clients Company </span> </label>
	<input type='text' name='Company' value='<?= stripslashes($row['Company']) ?>' /> 
	
<label>Job Title <span class="small">Add Your Clients Job Title</span> </label>
	<input type='text' name='JobTitle' value='<?= stripslashes($row['JobTitle']) ?>' /> 
	
<label>Email <span class="small"> email@email.com </span> </label>
	<input type='text' name='Email' value='<?= stripslashes($row['Email']) ?>' /> 
	
<label>Phone Number <span class="small">xxx-xxx-xxxx</span> </label>
	<input type='text' name='Phone' value='<?= stripslashes($row['Phone']) ?>' /> 
	
<label>Street <span class="small">...</span> </label>
	<input type='text' name='Street' value='<?= stripslashes($row['Street']) ?>' /> 
	
<label>City <span class="small">...</span> </label>
	<input type='text' name='City' value='<?= stripslashes($row['City']) ?>' /> 

<label>State <span class="small">...</span> </label>
	<input type='text' name='State' value='<?= stripslashes($row['State']) ?>' /> 

<label>Zip <span class="small">Zip Code 5 Digit Format</span> </label>
	<input type='text' name='Zip' value='<?= stripslashes($row['Zip']) ?>' /> 

<button type='submit' value='Edit Row'> Submit This Form </button> <input type='hidden' value='1' name='submitted' /> 

</form> 
<? } ?> 



	
	<br />
		<br />
			<br />

	
 





    
	</div>
	
</body>
</html>





