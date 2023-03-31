<?php

session_start();




if(isset($_POST['lgn_btn'])){
    $user = $_POST['names'];
    $lgn_phone = $_POST['lgn_phone'];
    $lgn_pass = $_POST['lgn_pass'];

    


    $phone = "/^0[67][^346, ^02]\d{7}$/";




    if(!empty($user) &&!empty($lgn_phone) && !empty($lgn_pass)){
        
        // Check if username is empty
        if($lgn_phone == '' || !preg_match($phone, $lgn_phone)){
            print "done";
        }
        else {
           # print "shit is working fine";
        }

        // Check if passwords are empty
        if($lgn_pass == ''){
            echo 'Please enter  passwords';
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

$sql_table = "CREATE TABLE IF NOT EXISTS admins (
        user VARCHAR(20) NOT NULL,
        phone INT(12) NOT NULL,
        passwords VARCHAR(50) NOT NULL )";

if (mysqli_query($conn, $sql_table)) {
    #print "table created succesfully";
} else {
    die('table not created: ' . mysqli_error($conn));
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $lgn_phone = $_POST['lgn_phone'];
    $lgn_pass = $_POST['lgn_pass'];



$sql = "SELECT * FROM admins WHERE phone = '$lgn_phone' AND passwords = '$lgn_pass'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (!password_verify($lgn_pass, $row['passwords'])) {
            $_SESSION['phone'] = $lgn_phone;
            header('Location: Admin page.php');
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }

}
    mysqli_close($conn);










































?>