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
	<table style="margin-top:40px; margin-left:550px;">
	<caption><b><font size="6">City_Details</font></b></caption>
		<tr>
			<th>Doctor_id</th>
			<th>City</th>
			<th>No_Of_Days_Per_Week</th>
		</tr>
	
	<?php 
	$conn=	mysqli_connect('localhost', 'root', '','dbms');
		if($conn->connect_error){
			die("Connection Failed:".$conn->connect_error);
		}
		$sql="Select Doctor_id,City,No_Of_Days_Per_Week from citydetails";
		$result=$conn->query($sql);
		if($result->num_rows){
			while($row=$result->fetch_assoc()){
				echo "<tr>
				<td>".$row["Doctor_id"]."</td>
				<td>".$row["City"]."</td>
				<td>".$row["No_Of_Days_Per_Week"]."</td>
				</tr>";
			}
			echo "</table>";
		}
		$conn-> close();
	 ?>
	</table>
	
	<p style="text-align:center;"><a href="Display_Location_details.php"><font size="6">Get Location_Details</font></a></p>
	<p style="text-align:center;"><a href="DBMS.php"><font size="4">HOME</font></a></p>

</body>
</html>