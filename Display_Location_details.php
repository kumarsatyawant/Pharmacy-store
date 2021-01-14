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
    <table style="margin-top:40px; margin-left:340px;">
	<caption><b><font size="6">Location_Details</font></b></caption>
		<tr>
			<th>City</th>
			<th>Doctor_id</th>
			<th>Availability</th>
			<th>Address</th>
		</tr>
	
	<?php 
	$conn=	mysqli_connect('localhost', 'root', '','dbms');
		if($conn->connect_error){
			die("Connection Failed:".$conn->connect_error);
		}
		$sql="Select City,Doctor_id,Availability,Address from location_details";
		$result=$conn->query($sql);
		if($result->num_rows){
			while($row=$result->fetch_assoc()){
				echo "<tr>
				<td>".$row["City"]."</td>
				<td>".$row["Doctor_id"]."</td>
				<td>".$row["Availability"]."</td>
				<td>".$row["Address"]."</td>
				</tr>";
			}
			echo "</table>";
		}
		$conn-> close();
	 ?>
	</table>
	
<p style="text-align:center;"><a href="Display_doctor_info.php"><font size="6">Get Doctor_Details</font></a></p>
<p style="text-align:center;"><a href="Display_city_details.php"><font size="6">Get City_Details</font></a></p>
<p style="text-align:center;"><a href="DBMS.php"><font size="4">HOME</font></a></p>

</body>
</html>