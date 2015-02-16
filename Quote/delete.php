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
$id = (int) $_GET['id']; 
mysql_query("DELETE FROM `quote` WHERE `id` = '$id' ") ; 
echo (mysql_affected_rows()) ? "<img src='../images/error.png'><br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='list.php'>Back To Listing</a>
    
    
	</div>
	
</body>
</html>





