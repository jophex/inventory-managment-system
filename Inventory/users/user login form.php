<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <title>USER LOGIN</title>
</head>
<body>
<div class="main">
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-form">
                    <h2 class="form-title">USER LOGIN</h2>
                    <form action="user_login_process.php" method="POST" class="register-form" id="login-form">
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="user_log" id="your_name" placeholder="Your phone"/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="user_pass" id="your_pass" placeholder="Password"/>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="user_btn" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                </div>
                <a href="user sign.php" class="signup-image-link">create account</a>

                <a href="../admin/admin login form.php" class="signup-image-link">Admin</a>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
    
</body>
</html>