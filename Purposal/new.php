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
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `proposal` ( `Project` ,  `Customer` ,  `Work` ,  `Problem` ,  `Solution` ,  `Timline`  ) VALUES(  '{$_POST['Project']}' ,  '{$_POST['Customer']}' ,  '{$_POST['Work']}' ,  '{$_POST['Problem']}' ,  '{$_POST['Solution']}' ,  '{$_POST['Timline']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "<img src='../images/success.png'><br />"; 
echo "<a href='list.php'>Back To Listing</a><br /> <br />"; 
} 
?>

<form action='' method='POST' class='myform' id='stylized'> 

<label>Project Title <span class="small">Title of the Current Project</span> </label> 
	<input type='text' name='Project'/> 
	
	
<label>Customer Name <span class="small">First and Last Name</span> </label> 
	<input type='text' name='Customer'/> 
	
	
<label>Type of Work <span class="small">Type: Graphic Design, Web Design, or Programming</span> </label>
	<input type='text' name='Work'/>  
	
	
<label>Problem <span class="small">What is the Problem you are trying to solve? </span> </label> 
	<input type='text' name='Problem'/> 
	
<label>Solution <span class="small"> Solution that you are applying to the project. </span> </label> 
	<input type='text' name='Solution'/> 
	
<label>Timeline <span class="small">Specific time of the different parts of the project.</span> </label> 
	<input type='text' name='Timline'/> 
	
<button type='submit' value='Add Row'> Enter Information </button> <input type='hidden' value='1' name='submitted' /> 

</form> 

<br />
<br />
<br />
    
	</div>
	
</body>
</html>




