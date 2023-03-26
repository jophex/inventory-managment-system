<!DOCTYPE html>
<html>
<head>
    <title>loginform</title>
    <link rel="stylesheet" href="form.css" >
    </head>
    <body>
        <div class="form">
        <form  action="loginpr.php" method="POST">
            <div class="formpart">
                       
                    

                        <label>name</label>
                        <input type="text" name="fullname"  required/><br>
                        <br>

                    

                    
                        <label> Password</label>
                        <input type="password" name="password" required /><br>
                        <br>
                        <center>
                     <p style="color: rgb(236, 8, 8);" >forgot password ?please contact administrator</p>

                
                        <input type="submit" name="submit"  value="LOGIN" style="background-color: green;" />
                    </center>
            </div>
                    
                </form>
        </div>
</body>
</html>
