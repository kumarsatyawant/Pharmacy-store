<?php
$id = $_GET['Doctor_id'];
$Name = $_GET['Doctor_Name'];
$deg = $_GET['Degree'];
$exp = $_GET['Experience'];
$Spe = $_GET['Speciality'];
$fee = $_GET['Check_Up_Fee'];
$cit = $_GET['City'];
$No = $_GET['No_Of_Days/week'];
$ava = $_GET['Availability'];
$add = $_GET['Address'];
$conn = mysqli_connect('localhost','root','','dbms');
$q = mysqli_query($conn, "INSERT INTO doctordetails VALUES ('$id', '$Name','$deg','$exp','$Spe','$fee');");
$q = mysqli_query($conn, "INSERT INTO citydetails VALUES ('$id', '$cit','$No');");
$q = mysqli_query($conn, "INSERT INTO location_details VALUES ('$cit', '$id','$ava','$add');");
echo 'Data Inserted in Table!';
?>