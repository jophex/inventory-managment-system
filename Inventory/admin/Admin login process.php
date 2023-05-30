<?php
session_start();

include '../models/admin_security.php';


if (isset($_POST['lgn_btn'])) {
    $user = $_POST['names'];
    $lgn_phone = $_POST['lgn_phone'];
    $lgn_pass = sha1(md5($_POST['lgn_pass']));

    $phone = '/^0(6[89]|7[12578])[0-9]{6}$|^07[5-7][0-9]{7}$/';

    if (!empty($user) && !empty($lgn_phone) && !empty($lgn_pass)) {
        // Check if username is empty
        if ($lgn_phone == '' || !preg_match($phone, $lgn_phone)) {
            // print 'done';
        } else {
            # print "shit is working fine";
        }

        // Check if passwords are empty
        if ($lgn_pass == '') {
            echo "<script>alert('please enter password.');</script>";
            exit();
        }
    }

}

#===============DATABASE=============

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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lgn_phone = $_POST['lgn_phone'];
    $lgn_pass = sha1(md5($_POST['lgn_pass']));

    $sql = "SELECT * FROM admins WHERE phone = '$lgn_phone' AND passwords = '$lgn_pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (!password_verify($lgn_pass, $row['passwords'])) {

            $_SESSION['lgn_phone'] = $lgn_phone;
            header('Location: Admin home page.php');
        } else {
            echo "<script>alert('PLEASE CHECK YOUR PASSWORD.');</script>";
        }
    } else {
        echo '<script>alert("NO ACCOUNT FOUND!"); window.location.href = "admin login form.php";</script>';
 }
}
mysqli_close($conn);

?>
