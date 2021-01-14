<?php
$ite = $_GET['Company_Id'];
$conn = mysqli_connect('localhost','root','','dbms');
$q = mysqli_query($conn, "DELETE from drug_manufacturer_details where Company_Id=$ite;");
$q = mysqli_query($conn, "DELETE from medicine_details where Company_Id=$ite;");
echo 'Data Deleted from the Table!';
?>