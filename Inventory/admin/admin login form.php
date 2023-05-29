

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <title>Admin Login</title>
</head>
<body>

<div class="main">
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-form">
                    <h2 class="form-title">ADMIN LOGIN FORM</h2>
                    <form action="Admin login process.php" method="POST" class="register-form" id="login-form"  enctype="multipart/form-data">
                        

                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>

                            <input type="text" name="lgn_phone" id="your_name" placeholder="Your Phone"/ required="True">
                        </div>

                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="lgn_pass" id="your_pass" placeholder="Password"/>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="lgn_btn" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>
                </div>
                <a href="../users/user login form.php" class="signup-image-link">User Login</a>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>

    
       
</body>
</html>





<!-- 
<form class="form_container" action="login.php" method="POST" enctype="multipart/form-data"> -->
<!-- <input placeholder="name910" title="Inpit title" name="names" type="text" class="input_field" id="name" required="True"> -->
<!-- <input placeholder="name910" title="Inpit title" name="lgn_phone" type="text" class="input_field" id="email_field" required="True" > -->
<!-- <button title="Login" type="submit" name="lgn_btn" class="sign-in_btn"> -->
