
<!doctype html>
<html>
<body>
    <?php

require_once "login.php";

    print $phone;


    print $_COOKIE['name' ]; 

 




  

    







/*include("regform.html");


    if(isset($_POST['submit']))
    {
                $fullname=$_POST['fullname'];
                $phone=$_POST['phone'];
                $password=$_POST['password'];
                $password1=$_POST['password1'];
                $email=$_POST['email'];
                


        if(!preg_match("/^(07|06)[0-9]{8}$/",$phone))
        {
        echo"phone invalid";
        }
      if(!preg_match("/^[a-z||A-Z]*$/",$fullname))
        {
        echo"Name can only contail letters and space";
        }
     if ($password!==$password1) 
        {
        echo "Password Dont match" ;
        }
     /*else if(!filter_var($email, FILTER_VALIDATE_EMAIL)))
        {
        echo"email invalid";
        }*/




    

    // }


    
    
        ?>


<form action="another.php">

        <input type="button" name="status" value="approved">

        <input type="button" name="status" value="rejected">


</form>


</html>
</body>