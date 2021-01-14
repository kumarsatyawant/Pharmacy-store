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
	<table style="margin-top:40px; margin-left:250px;">
	<caption><b><font size="6">Doctor_Details</font></b></caption>
		<tr>
			<th>Doctor_id</th>
			<th>Doctor_Name</th>
			<th>Degree</th>
			<th>Experience</th>
			<th>Speciality</th>
			<th>Check_Up_Fee</th>
		</tr>
	
	<?php 
	$conn=	mysqli_connect('localhost', 'root', '','dbms');
		if($conn->connect_error){
			die("Connection Failed:".$conn->connect_error);
		}
		$sql="Select Doctor_id,Doctor_Name,Degree,Experience,Speciality,Check_Up_Fee from doctordetails";
		$result=$conn->query($sql);
			while($row=$result->fetch_assoc()){
				echo "<tr>
				<td>".$row["Doctor_id"]."</td>
				<td>".$row["Doctor_Name"]."</td>
				<td>".$row["Degree"]."</td>
				<td>".$row["Experience"]."</td>
				<td>".$row["Speciality"]."</td>
				<td>".$row["Check_Up_Fee"]."</td>
				</tr>";
			}
			echo "</table>";
		
		$conn-> close();
	 ?>
	</table>
	
	<p style="text-align:center;"><a href="Display_city_details.php"><font size="6">Get City_Details</font></a></p>
	<p style="text-align:center;"><a href="Display_Location_details.php"><font size="6">Get Location_Details</font></a></p>
	<p style="text-align:center;"><a href="DBMS.php"><font size="4">HOME</font></a></p>

</body>
</html>