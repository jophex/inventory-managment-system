<?php

session_start();

if (!isset($_SESSION['user_log'])) {
    header('location: user login form.php');
}

?>
