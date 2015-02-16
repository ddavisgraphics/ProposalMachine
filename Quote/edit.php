<html> 

<head>
 
    <title> Proposal DB - Login Screen </title>
    
    <link rel="stylesheet" type="text/css" href="../style.css" />

</head>

<body>

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
	<div id="contentcontainer" align="center">

    <? 
include('config.php'); 
if (isset($_GET['id']) ) { 
$id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `quote` SET  `Customer` =  '{$_POST['Customer']}' ,  `Date` =  '{$_POST['Date']}' ,  `Deadline` =  '{$_POST['Deadline']}' ,  `Description` =  '{$_POST['Description']}' ,  `Costs` =  '{$_POST['Costs']}' ,  `Quote` =  '{$_POST['Quote']}' ,  `Tax` =  '{$_POST['Tax']}'   WHERE `id` = '$id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "<img src='../images/success.png'><br />" : "<img src='../images/error.png'> <br />"; 
echo "<a href='list.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `quote` WHERE `id` = '$id' ")); 
?>

<form action='' method='POST' class='myform' id='stylized'> 

<label>Customer Name:  <span class="small">Enter the Customers Name</span> </label> <input type='text' name='Customer' value='<?= stripslashes($row['Customer']) ?>' /> 
<label>Date: <span class="small">Add Date this Quote was Made</span> </label> <input type='text' name='Date' value='<?= stripslashes($row['Date']) ?>' /> 
<label>Deadline: <span class="small">Add Your Customers Deadline</span> </label> <input type='text' name='Deadline' value='<?= stripslashes($row['Deadline']) ?>' /> 
<label>Description: <span class="small">Describe the project thoroughly</span> </label><textarea name='Description'><?= stripslashes($row['Description']) ?></textarea> 
<label>Costs:<span class="small">Add Your Cost for the Project</span> </label><textarea name='Costs'><?= stripslashes($row['Costs']) ?></textarea> 
<label>Quote:<span class="small">Add the markup and price you would charge the customer</span> </label> <textarea name='Quote'><?= stripslashes($row['Quote']) ?></textarea> 
<label>Tax Amount <span class="small">6 Percent Sales Tax</span> </label> <input type='text' name='Tax' value='<?= stripslashes($row['Tax']) ?>' />

<button type='submit' value='Edit Row'> Enter Information </button> <input type='hidden' value='1' name='submitted' />
</form> 
<? } ?> 
    
    
	</div>
	
	
	
	
</body>
</html>








