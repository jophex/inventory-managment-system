<?php
session_start();

include '../models/admin_security.php';

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'NTstore';

$conn = mysqli_connect($host, $user, $pass, $dbname);

#$conn = new mysqli($host, $user, $pass, $dbname);

if (!$conn) {
    die('connection failed: ' . mysqli_connect_error());
}





if (isset($_GET['accept'])) {
   $update = "UPDATE Requests SET user_status = 'Accepted' WHERE request_id = '$_GET[id]'";

    if (mysqli_query($conn, $update)) {
       echo 'Device updated successful';
    } else {
        echo 'Error updating record: ' . mysqli_error($conn);
    }
}

if (isset($_GET['reject'])) {
    $update2 = "UPDATE Requests SET user_status = 'Rejected' WHERE username = '$_GET[id]'";

    if (mysqli_query($conn, $update2)) {
        echo 'Device updated successful';
    } else {
        echo 'Error updating record: ' . mysqli_error($conn);
    }
}

if (isset($_GET['return'])) {
    $update3 = "UPDATE Requests SET returns = 'Returned' WHERE username = '$_GET[id]'";

    if (mysqli_query($conn, $update3)) {
        echo 'Device updated successful';
    } else {
        echo 'Error updating record: ' . mysqli_error($conn);
    }
}

?>
