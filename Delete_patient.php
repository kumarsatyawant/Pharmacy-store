<?php
$ita = $_GET['Patient_Id'];
$conn = mysqli_connect('localhost','root','','dbms');
$q = mysqli_query($conn, "DELETE from patient_details where Patient_Id=$ita;");
$q = mysqli_query($conn, "DELETE from medicines_prescribed where Patient_Id=$ita;");
echo 'Data Deleted from the Table!';
?>