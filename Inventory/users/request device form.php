<?php
session_start();
require "../models/generate_id.php";
include '../models/security.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <title>Requests Device</title>
</head>
<body>
    
</body>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">REQUEST DEVICES</h2>
                        <form action="requesting process.php" method="POST" enctype="multipart/form-data" class="register-form" id="register-form">

                        <div class="form-group">
                            <?php 
                                $conn = mysqli_connect('localhost', 'root', '', 'NTstore');
                                
                                if (!$conn) {
                                    die('connection failed: ' . mysqli_connect_error());
                                }

                                $query = mysqli_query($conn,"SELECT name FROM users WHERE phone='".$_SESSION['user_log']."'");
                                while($row=mysqli_fetch_array($query))
                                {
                                    
                                ?> 

                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="hidden" name="userid" id="name" value="<?php echo $_SESSION['user_log'];?>"/>
                                <input type="hidden" name="username" id="request"  value="<?php echo $row['name'];?>"/>
                            </div>
                            <?php }?>

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="dvname" id="name" placeholder="Device Name"/>
                                <input type="hidden" name="request_id" id="request"  value="<?php echo $request_id;?>"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="quantity" id="email" placeholder="Quanity"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" name="type" id="pass" placeholder="Device Type"/>
                            </div>
                            <div class="input_container">
                                    <select name="cat" class="input_field" id="password_field">
                                        <option name="cat" class="input_label">Laptop        </option>
                                        <option name="cat" class="input_label">Desktop       </option>
                                        <option name="cat" class="input_label">Scanner       </option>
                                        <option name="cat" class="input_label">Printer       </option>
                                        <option name="cat" class="input_label">Adopters      </option>
                                        <option name="cat" class="input_label">Cables        </option>
                                        <option name="cat" class="input_label">Other Devices </option>
                                      </select>
                              </div>
                            <div class="form-group form-button">
                                <input type="submit" name="add_device" id="signup" class="form-submit" value="REQUEST"/>
                            </div>
                          </form>

                          
                </div>
            </div>
        </section>
    </div>

 
</div>


</html>

