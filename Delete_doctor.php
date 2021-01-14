<?php
$itee = $_GET['Doctor_id'];
$conn = mysqli_connect('localhost','root','','dbms');
$q = mysqli_query($conn, "DELETE from doctordetails where Doctor_id=$itee;");
$q = mysqli_query($conn, "DELETE from citydetails where Doctor_id=$itee;");
$q = mysqli_query($conn, "DELETE from location_details where Doctor_id=$itee;");
echo 'Data Deleted from the Table!';
?>