<!DOCTYPE html>
<html>
<head>
    <title>regform</title>
    <link rel="stylesheet" href="form.css" >
    </head>
  
    <body>
        <div class="form">
         

        <form  action="regpr.php" method="POST" >
            <div class="formpart">

              
                <label>Full name</label>
                        <input type="text" name="fullname" required  /><br>
                        <br>
                    

                    
                        <label>Email</label>
                        <input type="email" name="email"  required/><br>
                        <br>
                    

                    
                        <label>Password</label>
                        <input type="password" name="password" required /><br>
                        <br>

                        
                        <label>Comform Password</label>
                        <input type="password" name="password1" required /><br>
                        <br>
                        

                        <label>Phone number</label>
                        <input type="phone" name="phone"  required/><br>

                        <br>

                        <label>Department</label>
                        <select name="department" >
                            <option>Finance and Administration</option>
                            <option>Exams Desing and Development</option>
                            <option>Examination Administration</option>
                            <option>Printing and Publications</option>
                            <option>ICT</option>
                            </select>
                        <br>

                        <br>
                      
                            <input type="submit" name="submit"  value="Create account" style="background-color: rgb(15, 221, 60);">
                            <br>
                            
                            <input type="reset" value="reset" style="background-color: red;">
                            <center>
                            <p> Already have an account ?<a href="loginform.php" target="_blank"> Log in</a></p>
                    </center>

            </div>
            
         </form>
       
    
      
            </body>
</html>
