<?php

session_start();
unset($_SESSION['id']);
session_destroy();
echo"<script>alert('You Have loged out in the system');document.location='loginform.php'</script>";
?>