<?php
$cm = $_GET['Company_Name'];
$it = $_GET['Company_Id'];
$po = $_GET['Phone_No'];
$em = $_GET['Email'];
$ad = $_GET['Address'];
$md = $_GET['Medicine_Names'];
$pr = $_GET['Price/Unit'];
$dq = $_GET['DOP'];
$conn = mysqli_connect('localhost','root','','dbms');
$q = mysqli_query($conn, "INSERT INTO drug_manufacturer_details VALUES ('$cm', '$it','$po','$em','$ad');");
$q = mysqli_query($conn, "INSERT INTO medicine_details VALUES ('$it', '$md','$pr','$dq');");
echo 'Data Inserted in Table!';
?>