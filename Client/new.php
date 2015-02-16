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
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `client` ( `Name` ,  `Company` ,  `JobTitle` ,  `Email` ,  `Phone` ,  `Street` ,  `City` ,  `State` ,  `Zip`  ) VALUES(  '{$_POST['Name']}' ,  '{$_POST['Company']}' ,  '{$_POST['JobTitle']}' ,  '{$_POST['Email']}' ,  '{$_POST['Phone']}' ,  '{$_POST['Street']}' ,  '{$_POST['City']}' ,  '{$_POST['State']}' ,  '{$_POST['Zip']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo " <img src='../images/success.png'><br />"; 
echo "<a href='list.php'>Click Here to Go Back To Previous Page</a>"; 
} 
?>



<form action='' method='POST' id="stylized" class="myform" > 

<label>Name <span class="small">Add Your Clients Name</span> </label>
	<input type='text' name='Name'/> 

<label>Company <span class="small">Add Your Clients Company </span> </label>	
	<input type='text' name='Company'/> 
	
<label>Job Title <span class="small">Add Your Clients Job Title</span> </label>
	<input type='text' name='JobTitle'/> 
	
<label>Email <span class="small"> email@email.com </span> </label>
	<input type='text' name='Email'/> 

<label>Phone Number <span class="small">Add Your Clients Name</span> </label>
	<input type='text' name='Phone'/> 

<label>Street <span class="small">...</span> </label>	
	<input type='text' name='Street'/> 
	
<label>City <span class="small">...</span> </label>
	<input type='text' name='City'/> 
	
<label>State <span class="small">...</span> </label>
	<input type='text' name='State'/>
	 
<label>Zip <span class="small">Zip Code 5 Digit Format</span> </label>
	<input type='text' name='Zip'/> 
	
<button type='submit' value='Add Row'> Submit This Form </button> 

</form> 


<br /> 
<br />
<br /> 
<br />   
 
    
	</div>
	
</body>
</html>




