<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "necta_db";

$conn = mysqli_connect($servername, $username, $password,$db);

if(mysqli_connect_error())
{
    echo"failed to connect";
}
?>