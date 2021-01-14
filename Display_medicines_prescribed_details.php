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
	<table style="margin-top:40px; margin-left:380px;">
	<caption><b><font size="6">Medicines_Prescribed</font></b></caption>
		<tr>
			<th>Patient_Id</th>
			<th>Medicines_Prescribed</th>
			<th>D_O_T</th>
		</tr>
	
	<?php 
	$conn=	mysqli_connect('localhost', 'root', '','dbms');
		if($conn->connect_error){
			die("Connection Failed:".$conn->connect_error);
		}
		$sql="Select Patient_Id,Medicines_Prescribed,D_O_T from medicines_prescribed";
		$result=$conn->query($sql);
		if($result->num_rows){
			while($row=$result->fetch_assoc()){
				echo "<tr>
				<td>".$row["Patient_Id"]."</td>
				<td>".$row["Medicines_Prescribed"]."</td>
				<td>".$row["D_O_T"]."</td>
				</tr>";
			}
			echo "</table>";
		}
		$conn-> close();
	 ?>
	</table>
	
	<p style="text-align:center;"><a href="Display_patient_info.php"><font size="6">Get Patient_Details</font></a></p>
	<p style="text-align:center;"><a href="DBMS.php"><font size="4">HOME</font></a></p>


</body>
</html>