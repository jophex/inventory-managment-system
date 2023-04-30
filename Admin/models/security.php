<?php

session_start();

if (!isset($_SESSION['adminId'])) {
    header('location: adminlog.php');
}

?>
