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
			<li><a href="../Purposal/list.php" class="highlight"><span>Proposal Table</span></a></li>	
			<li><a href="../Quote/list.php"><span>Quote Table</span></a></li>	
			<li><a href="../InvoiceProposal/invoice.html" target="_blank"><span>Invoice</span></a></li>	
			<li><a href="../InvoiceProposal/proposal.html" target="_blank"><span>Proposal</span></a></li>	
	
		</ul>	
		</div>

</div>
	<div id="contentcontainer" align="center" class="table">
	


<? 
include('config.php'); 
echo "<table border=0 cellpadding=1 >"; 
echo "<tr>"; 
echo "<th><b>Id</b></th>"; 
echo "<th><b>Project</b></th>"; 
echo "<th><b>Customer</b></th>"; 
echo "<th><b>Work</b></th>"; 
echo "<th><b>Problem</b></th>"; 
echo "<th><b>Solution</b></th>"; 
echo "<th><b>Timeline</b></th>"; 
echo "<th><b>Edit</b></th>"; 
echo "<th><b>Delete</b></th>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `proposal`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Project']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Customer']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Work']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Problem']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Solution']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['Timline']) . "</td>";  
echo "<td valign='top'><a href=edit.php?id={$row['id']}><img src='../images/edit.png'></a></td><td><a href=delete.php?id={$row['id']}><img src='../images/delete.png'></a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=new.php> <img src='../images/addnew_roll.png'> </a>"; 
?>

    
    
    
	</div>
	
</body>
</html>




