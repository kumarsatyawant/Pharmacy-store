<!DOCTYPE html>
<html>
<head>
<style>
table, th,td {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #ffa500;
}
</style>
</head>
<body bgcolor="#ff0000">
	<table style="margin-top:40px; margin-left:520px;">
	<caption><b><font size="6">Medicine_Details</font></b></caption>
		<tr>
			<th>Company_Id</th>
			<th>Medicine_Names</th>
			<th>Price_Per_Unit</th>
		</tr>
	
	<?php 
	$conn=	mysqli_connect('localhost', 'root', '','dbms');
		if($conn->connect_error){
			die("Connection Failed:".$conn->connect_error);
		}
		$sql="Select Company_Id,Medicine_Names,Price_Per_Unit from medicine_details";
		$result=$conn->query($sql);
		if($result->num_rows){
			while($row=$result->fetch_assoc()){
				echo "<tr>
				<td>".$row["Company_Id"]."</td>
				<td>".$row["Medicine_Names"]."</td>
				<td>".$row["Price_Per_Unit"]."</td>
				</tr>";
			}
			echo "</table>";
		}
		$conn-> close();
	 ?>
	</table>
	
	<p style="text-align:center;"><a href="Display_Drug_manufacturer_info.php"><font size="6">Get Drug_Suppliers_Details</font></a></p>
	<p style="text-align:center;"><a href="DBMS.php"><font size="4">HOME</font></a></p>


</body>
</html>