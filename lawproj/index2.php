<?php

# =============== ADMIN REGISTER=================
session_start();
$catuser = "";
$catphone = "";
$catpass = "";

if(isset($_POST['reg_btn'])){

    $reg_user = $_POST['reg_name'];
    $reg_phone = $_POST['reg_phone'];
    $reg_pass = $_POST['reg_pass'];

    


    $phone = "/^0[67][^346, ^02]\d{7}$/";
    
    #if(!empty($reg_user) && !empty($reg_phone) && !empty($reg_pass)){

        $reg_user = filter_var($reg_user, FILTER_SANITIZE_STRING);

            
        // Check if name is empty
        if($reg_user == ''){
            $user_msg = 'check your name <br>'; 
        } else {
            $catuser = $reg_user;
        }
        
        // Check if username is empty
        if($reg_phone == '' || !preg_match($phone, $reg_phone)){
            $phone_error = 'Please enter your phone <br>';
        } 
        else{
            $catphone = $reg_phone;

        }
        

        // Check if passwords are empty
        if($reg_pass == '' ){
            $pases = 'Please enter passwords';
            exit();
        }

        else{
            $catpass = $reg_pass;
        }

   # }

}


#=============   DATABASE  ===============
    

if($catuser != "" ||  $catphone != "" || $catpass != ""){

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "NTstore";



    $conn = new mysqli($host, $user, $pass, $dbname);


    if (!$conn){
        die("connection failed: ". mysqli_connect_error());
    }
        print "connected succeffully";


    # ========CREATING DATABASE IF NOT EXIST================

    $db_select = mysqli_select_db($conn, $dbname);

    if(!$db_select){

        $sql_base = "CREATE DATABASE IF NOT EXISTS $dbname";

        if(mysqli_query($conn, $sql_base)){

            print "database created succesfully";

    } else{
        die("Error creating database: ".mysqli_error($conn));
        }
        
    }

    mysqli_select_db($conn, $dbname);

    # =======CREATING TABLE IN THE DATABASE IF NOT EXIST ============


    $sql_table = "CREATE TABLE IF NOT EXISTS admin_store (
        name VARCHAR(30) NOT NULL,
        phone INT(12) NOT NULL,
        password VARCHAR(50) NOT NULL )";

    if(mysqli_query($conn, $sql_table)){

        print "table created succesfully";

    } else{
        die ("table not created: ". mysqli_error($conn));

    }

    # ================SENDING DATA TO DATABASE================
    
    $sql = "INSERT INTO admin_store VALUES ('$catuser', '$catphone', '$catpass')";
                                        
    #$stmt = mysqli_stmt_init($conn);

    #if (!mysqli_stmt_prepare($stmt, $sql)){
        
    #   die ("SQL error: " .mysqli_error($conn));
    #}

    #data binding to the place holder

    #mysqli_stmt_bind_param($stmt, "sis", $name, $phone, $password);

    #if (mysqli_stmt_execute($stmt)){
    #   die ("SQL ERROR: ".mysqli_error($conn));

    #}

    #mysqli_stmt_close($stmt);



    if(mysqli_query($conn, $sql)){

        print "data stored succesfully <br>";

    } else{
        print "ERROR: $sql.". mysqli_error($conn);
    }



    mysqli_close($conn);

    header("Location: Admin page.html");
    exit();

}

else{
    print "please check your details";
}

?>

