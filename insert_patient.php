<?php
$first = $_GET['First_Name'];
$last = $_GET['Last_Name'];
$ide = $_GET['Patient_Id'];
$gen = $_GET['Gender'];
$con = $_GET['Contact_No'];
$cou = $_GET['Country'];
$tre = $_GET['Treated_By'];
$med = $_GET['Medicines_Prescribed'];
$dot = $_GET['D_O_T'];
$conn = mysqli_connect('localhost','root','','dbms');
$q = mysqli_query($conn, "INSERT INTO patient_details VALUES ('$first', '$last','$ide','$gen','$con','$cou','$tre');");
$q = mysqli_query($conn, "INSERT INTO medicines_prescribed VALUES ('$ide', '$med','$dot');");
echo 'Data Inserted in Table!';
?>