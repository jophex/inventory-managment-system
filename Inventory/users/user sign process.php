<?php
include '../models/security.php';

# =============== ADMIN REGISTER =================
session_start();


$catuser = '';
$catphone = '';
$catpass = '';
$cat_depart = '';

if (isset($_POST['reg_btn'])) {
    $userid = $_POST['user_id'];
    $reg_user = $_POST['reg_name'];
    $reg_phone = $_POST['reg_phone'];
    $reg_pass = sha1(md5($_POST['reg_pass']));
    $reg_depart = $_POST['depart'];

    $phone = "/^(06|07)[0-9]{8}$/";
    $number = 10;

    if (
        !empty($reg_user) &&
        !empty($reg_phone) &&
        !empty($reg_pass) &&
        !empty($reg_depart)
    ) {
        $reg_user = filter_var($reg_user, FILTER_SANITIZE_STRING);

        // Check if name is empty
        if ($reg_user == '') {
            $user_msg = 'check your name <br>';
        } else {
            $catuser = $reg_user;
        }

        // Check if phone is empty
        if (strlen($reg_phone) != $number || $reg_phone == '' ||!preg_match($phone, $reg_phone)){
            echo '<script>alert("PLEASE FILL THE REQUIRED FILEDS FIRST!"); window.location.href ="user sign.php";</script>';

        } else {
            $catphone = $reg_phone;
        }

        if ($reg_pass == '') {
            $reg_pass = 'check your password <br>';
        } else {
            $catpass = $reg_pass;
        }

        if ($reg_depart == '') {
            $reg_depart = 'enter department <br>';
        } else {
            $cat_depart = $reg_depart;
        }
    }
}

#=============   DATABASE  ===============

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'NTstore';

$conn = mysqli_connect($host, $user, $pass, $dbname);
#$conn = new mysqli($host, $user, $pass, $dbname);

if (!$conn) {
    die('connection failed: ' . mysqli_connect_error());
}
#  print "connected succeffully";

# ========CREATING DATABASE IF NOT EXIST================

$db_select = mysqli_select_db($conn, $dbname);

if (!$db_select) {
    $sql_base = "CREATE DATABASE IF NOT EXISTS $dbname";

    if (mysqli_query($conn, $sql_base)) {
        #  print "database created succesfully";
    } else {
        die('Error creating database: ' . mysqli_error($conn));
    }
}

mysqli_select_db($conn, $dbname);

# =======CREATING TABLE IN THE DATABASE IF NOT EXIST ============

$sql_table = "CREATE TABLE IF NOT EXISTS users (
        user_id VARCHAR(255) NOT NULL PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        phone INT(12) NOT NULL,
        department VARCHAR(30) NOT NULL,
        password VARCHAR(50) NOT NULL )";

if (mysqli_query($conn, $sql_table)) {
    #print "table created succesfully";
} else {
    die('table not created: ' . mysqli_error($conn));
}

# ================SENDING DATA TO DATABASE================

if ($catuser != '' || $catphone != '' || $catpass != '' || $cat_depart != '') {
    $sql = "INSERT INTO users VALUES ('$userid','$catuser', '$catphone', '$cat_depart' ,'$catpass')";



    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('REGISTER SUCCESFULLY PLEASE LOGIN.');</script>";
    } else {
        print "ERROR: $sql." . mysqli_error($conn);
    }

    header('Location: user login form.php');
    mysqli_close($conn);
    exit();


} else {
    echo '<script>alert("PLEASE FILL THE REQUIRED FILEDS FIRST!"); window.location.href ="user sign.php";</script>';
}


?>
