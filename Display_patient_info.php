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
	<table style="margin-top:40px; margin-left:350px;">
	<caption><b><font size="6">Patient_Details</font></b></caption>
		<tr>
			<th>First_Name</th>
			<th>Last_Name</th>
			<th>Patient_Id</th>
			<th>Gender</th>
			<th>Contact_No</th>
			<th>Country</th>
			<th>Treated_By</th>
		</tr>
	
	<?php 
		// $conn=mysqli_connect("localhost","root","1234","DBMS");
	$conn=	mysqli_connect('localhost', 'root', '','dbms');
		if($conn->connect_error){
			die("Connection Failed:".$conn->connect_error);
		}
		$sql="Select First_Name,Last_Name,Patient_Id,Gender,Contact_No,Country,Treated_By from patient_details";
		$result=$conn->query($sql);
		if($result->num_rows){
			while($row=$result->fetch_assoc()){
				echo "<tr>
				<td>".$row["First_Name"]."</td>
				<td>".$row["Last_Name"]."</td>
				<td>".$row["Patient_Id"]."</td>
				<td>".$row["Gender"]."</td>
				<td>".$row["Contact_No"]."</td>
				<td>".$row["Country"]."</td>
				<td>".$row["Treated_By"]."</td>
				</tr>";
			}
			echo "</table>";
		}
		$conn-> close();
	 ?>
	</table>
	
	<p style="text-align:center;"><a href="Display_medicines_prescribed_details.php"><font size="6">Get Medicines_Prescribed_Details</font></a></p>
	<p style="text-align:center;"><a href="DBMS.php"><font size="4">HOME</font></a></p>

</body>
</html>