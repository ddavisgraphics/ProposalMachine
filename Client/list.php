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
			
			<li><a href="../Client/list.php" class="highlight"><span>Client Table</span></a></li>	
			<li><a href="../Purposal/list.php"><span>Proposal Table</span></a></li>	
			<li><a href="../Quote/list.php"><span>Quote Table</span></a></li>	
			<li><a href="../InvoiceProposal/invoice.html" target="_blank"><span>Invoice</span></a></li>	
			<li><a href="../InvoiceProposal/proposal.html" target="_blank"><span>Proposal</span></a></li>	

	
		</ul>	
		</div>

</div>
	<div id="contentcontainer" class="table" align="center">
	
	
<? 
include('config.php'); 
echo "<table border=0>"; 
echo "<tr>"; 
echo "<th><b>Id</b></th>"; 
echo "<th><b>Name</b></th>"; 
echo "<th><b>Company</b></th>"; 
echo "<th><b>JobTitle</b></th>"; 
echo "<th><b>Email</b></th>"; 
echo "<th><b>Phone</b></th>"; 
echo "<th><b>Street</b></th>"; 
echo "<th><b>City</b></th>"; 
echo "<th><b>State</b></th>"; 
echo "<th><b>Zip</b></th>"; 
echo "<th><b>Edit</b></th>"; 
echo "<th><b>Delete</b></th>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `client`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Name']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Company']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['JobTitle']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Email']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Phone']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Street']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['City']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['State']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Zip']) . "</td>";  
echo "<td valign='top'><a href=edit.php?id={$row['id']}><img src='../images/edit.png'></a></td><td><a href=delete.php?id={$row['id']}><img src='../images/delete.png'></a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php><img src='../images/addnew_roll.png'></a>"; 
?>
    
    
    
    
	</div>
	
</body>
</html>

