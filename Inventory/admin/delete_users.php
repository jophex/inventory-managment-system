<?php
session_start();

include '../models/admin_security.php';



  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $dbname = 'NTstore';

  $conn = mysqli_connect($host, $user, $pass, $dbname);

 if (!$conn) {
     die('connection failed: ' . mysqli_connect_error());
 }


 
   $sql = "DELETE FROM users WHERE phone = '$_GET[id]'";

   $records = $conn->query($sql);

   if (mysqli_query($conn, $sql)) {
   echo '<script>alert("DELETED SUCCESFULLY!"); window.location.href = "view users.php";</script>';
   //  header('Location: view users.php');

 } else{
  echo '<script>alert("NOT DELETED!"); window.location.href = "view users.php";</script>';
 }

 mysqli_close($conn);









?>