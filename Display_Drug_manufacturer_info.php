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
	<table style="margin-top:40px; margin-left:200px;">
	<caption><b><font size="6">Drug_Suppliers</font></b></caption>
		<tr>
			<th>Company_Name</th>
			<th>Company_Id</th>
			<th>Phone_No</th>
			<th>Email</th>
			<th>Address</th>
		</tr>
	
	<?php 
	$conn=	mysqli_connect('localhost', 'root', '','dbms');
		if($conn->connect_error){
			die("Connection Failed:".$conn->connect_error);
		}
		$sql="Select Company_Name,Company_Id,Phone_No,Email,Address from drug_manufacturer_details";
		$result=$conn->query($sql);
		if($result->num_rows){
			while($row=$result->fetch_assoc()){
				echo "<tr>
				<td>".$row["Company_Name"]."</td>
				<td>".$row["Company_Id"]."</td>
				<td>".$row["Phone_No"]."</td>
				<td>".$row["Email"]."</td>
				<td>".$row["Address"]."</td>
				</tr>";
			}
			echo "</table>";
		}
		$conn-> close();
	 ?>
	</table>
</body>

<p style="text-align:center;"><a href="Display_medicine_details.php"><font size="6">Get Medicines_Details</font></a></p>
<p style="text-align:center;"><a href="DBMS.php"><font size="4">HOME</font></a></p>

</html>