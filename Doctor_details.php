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
  background-color: #dddddd;
}
</style>
</head>

<body bgcolor="#E6E6FA">
<h1 style="text-align:center;background-color:DodgerBlue;">GREEN PHARMACY STORE</h1>
<table style="margin-top:0px; margin-left:150px;">
<caption><b>Doctor_Details</b></caption>
  <tr>
     <th>S.NO</th>
     <th>Doctor_Nmae</th>
     <th>Doctor_Id</th>
     <th>Degree</th>
     <th>Experience</th>
     <th>Speciality</th>
     <th>Check_Up Fee</th>
    </tr>
  <tr>
    <td>01</td>
    <td>Dr. AA Behrainwala</td>
    <td>45630</td>
    <td>MBBS, MS - General Surgery</td>
    <td>7 Years</td>
    <td>General Surgery</td>
    <td>₹ 300</td>
  </tr>
  <tr>
    <td>02</td>
    <td>Dr. A Ajay Reddy</td>
    <td>45631</td>
    <td>MBBS, MS - General Surgery, MCh - Neurosurgery</td>
    <td>17 Years</td>
    <td>Neuro Oncology</td>
    <td>₹ 450</td>
  </tr>
  <tr>
    <td>03</td>
    <td>Dr. Aartik Ladumor</td>
    <td>45632</td>
    <td>MBBS, MS - Pediatrics</td>
    <td>7 Years</td>
    <td>Pediatrics</td>
    <td>₹ 200</td>
  </tr>
  <tr>
    <td>04</td>
    <td>Dr. Akbar Mohamed Chettali</td>
    <td>45633</td>
    <td>MBBS, MD - Paediatrics , DM - Paediatric Neurology</td>
    <td>8 Years</td>
    <td>Paediatric Neurology</td>
    <td>₹ 500</td>
  </tr>
  <tr>
    <td>05</td>
    <td>Dr. Suresh Advani</td>
    <td>45634</td>
    <td>MBBS, MD - General Medicine, Fellowship</td>
    <td>42 Years</td>
    <td>Bone Marrow Transplant, Oncologist</td>
    <td>₹ 750</td>
  </tr>
  <tr>
    <td>06</td>
    <td>Dr. VS Prakash</td>
    <td>45635</td>
    <td>MBBS, MD - Internal Medicine, DM - Cardiology</td>
    <td>25 Years</td>
    <td>Cardiologist</td>
    <td>₹ 600</td>
  </tr>
</table>

<table  style="margin-top:60px; margin-left:500px;">
<caption><b>City_Details</b></caption>
  <tr>
     <th>Doctor_Id</th>
     <th>City</th>
     <th>No_Of_Days/week</th>
    </tr>
  <tr>
    <td>45630</td>
    <td>Mumbai</td>
    <td>2 days</td>
 </tr>
  <tr>
    <td>45631</td>
    <td>Hyderabad</td>
    <td>3 days</td>
  </tr>
  <tr>
    <td>45632</td>
    <td>Ahmedabad</td>
    <td>1 day</td>
 </tr>
<tr>
    <td>45633</td>
    <td>Kochi</td>
    <td>2 days</td>
 </tr>
<tr>
    <td>45634</td>
    <td>Delhi</td>
    <td>2 days</td>
 </tr>
<tr>
    <td>45635</td>
    <td>Bangalore</td>
    <td>3 days</td>
 </tr>
</table>

<table  style="margin-top:60px; margin-left:300px;">
<caption><b>Location_Details</b></caption>
<tr>
    <th>City</th>
    <th>Doctor_Id</th>
    <th>Availability</th>
    <th>Address</th>
</tr>
<tr>
    <td>Bangalore</td>
    <td>45635</td>
    <td>Tuesday,Thursday,Friday: 10:00 AM - 03:00 PM</td>
    <td>MS Ramaiah Narayana Heart Centre,Bangalore</td>
 </tr>
<tr>
    <td>Mumbai</td>
    <td>45630</td>
    <td>Monday,Thursday: 9:30 AM - 02:00 PM</td>
    <td>Saifee Hospital, Mumbai</td>
 </tr>
<tr>
    <td>Hyderabad</td>
    <td>45631</td>
    <td>Monday,Thursday,Saturday: 3:30 PM - 09:00 PM</td>
    <td>American Oconology institute, Hyderabad</td>
 </tr>
<tr>
    <td>Ahmedabad</td>
    <td>45632</td>
    <td>Thursday: 5:30 PM - 09:00 PM</td>
    <td>Sterling Hospital, Ahmedabad</td>
 </tr>
<tr>
    <td>Kochi</td>
    <td>45633</td>
    <td>Thursday,Friday: 12:30 PM - 08:00 PM</td>
    <td>Aster Medcity Hospital, Kochi</td>
 </tr>
<tr>
    <td>Delhi</td>
    <td>45634</td>
    <td>Monday,Friday: 11:30 AM - 04:00 PM</td>
    <td>Moolchand Hospital, Delhi</td>
 </tr>
</table>

<p style="color:hsl(0, 100%, 25%);text-align:center"><b><font size="10">Insert Details</font></b></p>

<center>
<form action="insert_doctor.php" method="get">
		Doctor_ID :<pre><input type="text" name="Doctor_id"></pre><br>
		Doctor_Name :<pre><input type="text" name="Doctor_Name"></pre><br>
		Degree :<pre><input type="text" name="Degree"></pre><br>
		Experience :<pre><input type="text" name="Experience"></pre><br>
		Speciality :<pre><input type="text" name="Speciality"></pre><br>
		Check_Up_fee :<pre><input type="text" name="Check_Up_Fee"></pre><br>
		City :<pre><input type="text" name="City"></pre><br>
		No_Of_Days/week :<pre><input type="text" name="No_Of_Days/week"></pre><br>
		Availability :<pre><input type="text" name="Availability"></pre><br>
		Address :<pre><input type="text" name="Address"></pre><br>
		<input type="submit" value="Insert">
</form>
</center>

<p style="color:hsl(0, 100%, 25%);text-align:center"><b><font size="10">Delete Details</font></b></p>
<center>
<form action="Delete_doctor.php" method="get">
		Doctor_Id :<pre><input type="text" name="Doctor_id"></pre><br>
		<input type="submit" value="Delete">
</form>
</center>
<p style="text-align:center;"><a href="Display_doctor_info.php"><font size="6">Get Doctor_Details</font></a></p>
<p style="text-align:center;"><a href="Display_city_details.php"><font size="6">Get City_Details</font></a></p>
<p style="text-align:center;"><a href="Display_Location_details.php"><font size="6">Get Location_Details</font></a></p>

<p style="color:rgb(255, 255, 255);background-color:darkblue"><marquee behavior="scroll" direction="left"><b>Copyright 2012 © Green Farmacy Store, All Rights Reserved. No part of this website can be reproduced in any form without the written permission of Green Farmacy. Website Design, Website Development by INI Technologies Pvt Ltd, Cochin, India</b></marquee></p>
</body>
</html>
