<?php
require "../models/generate_id.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- USER CSS SIGN UP -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <title>USER SIGN UP</title>

</head>
<body>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">USER SIGN UP</h2>
                        <form action="user sign process.php" method="POST" class="register-form" id="register-form">

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="reg_name" id="name" placeholder="Your Name"/>
                                <input type="hidden" name="user_id" value="<?php echo $cus_id;?>" id="name"/>
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="reg_phone" id="email" placeholder="Your Phone"/ maxlength="10">
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="reg_pass" id="pass" placeholder="Password"/ >
                            </div>
                            <div class="input_container">
                                    <select name="depart" class="input_field" id="password_field">
                                        <option name="depart" class="input_label">Finance and Administration</option>
                                        <option name="depart" class="input_label">Exams Desing and Development</option>
                                        <option name="depart" class="input_label">Examination Administration</option>
                                        <option name="depart" class="input_label">Printing and Publications</option>
                                        <option name="depart" class="input_label">Information Technology</option>
                                      </select>
                              </div>
                            <div class="form-group form-button">
                                <input type="submit" name="reg_btn" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                        <a href="user login form.php" class="signup-image-link">LOGIN</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</body>
</html>