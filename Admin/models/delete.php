<?php
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
    header('Location: ../users.php');

 } else{
    print "not deleted";
 }

 mysqli_close($conn);









?>