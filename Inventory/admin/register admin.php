<?php
require "../models/generate_id.php";

session_start();

include '../models/admin_security.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER ADMIN</title>
<style>

@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background:#363E4A;
  /* background: rgb(141,194,111); */
  /* background: linear-gradient(90deg, rgba(141,194,111,1) 0%, rgba(118,184,82,1) 50%);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;       */
}

</style>
</head>

<body>


<div class="login-page">
  <div class="form">
    <!-- <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> -->
    <form class="login-form" action="" method="POST">
      <input name="admin" type="hidden" value="<?php echo $admin_id;?>"/>
      <input name="admin_name" type="text" placeholder="username"/>
      <input name="admin_phone" type="text" placeholder="phone"/>
      <input name="admin_pass" type="password" placeholder="password"/>
      <button type="submit" name="button">login</button>

      <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
    </form>
  </div>
</div>




<?php


$conn = mysqli_connect('localhost', 'root', '', 'ntstore') or die('no connection');

$reg_admin = '';
$reg_phone = '';
$reg_pass = '';

if (isset($_POST['button'])) {
    $admin_id = $_POST['admin'];
    $admin_user = $_POST['admin_name'];
    $admin_phone = $_POST['admin_phone'];
    $admin_pass = sha1(md5($_POST['admin_pass']));
    

    if ($admin_user == '') {
        $user_msg = 'check your name <br>';
    } else {
        $reg_admin = $admin_user;
    }

    if ($admin_phone == '') {
        $phone_msg = 'check your phone number <br>';
    } else {
        $reg_phone = $admin_phone;
    }

    if ($admin_pass == '') {
        $pass_msg = 'check your password <br>';
    } else {
        $reg_pass = $admin_pass;
    }


    if (!empty($reg_admin) && !empty($reg_phone) && !empty($reg_pass)) {
        $sql = "INSERT INTO admins VALUES ('$admin_id','$reg_admin', '$reg_phone', '$reg_pass')";

        if (mysqli_query($conn, $sql)) {
          echo "<script>alert('Admin Added Succesfully.');</script>";
        } else {
            echo "Error: " . mysqli_error($conn) . "<br>";
        }
    } else {
      echo "<script>alert('Please fill in all fields.');</script>";
    }
}

mysqli_close($conn);
exit();









?>


    
</body>
</html>