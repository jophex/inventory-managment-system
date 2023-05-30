<?php
session_start();

include '../models/admin_security.php';


$catdv = "";
$catquan = "";
$cattype = "";
$catcat = "";



if(isset($_POST['add_device'])){
    $dvnam = $_POST['dvname'];
    $quantity = $_POST['quantity'];
    $type = $_POST['type'];
    $cat = $_POST['cat'];
     


      if($dvnam == ''){
        $name_err = "name required";
        // exit();
      }

      else{
        $catdv = $dvnam;
      }


      if($quantity == '' ){
        $quan_err = 'field not inserted'; 
        // exit();
    } 
    
    else {
        $catquan = $quantity;
        
    }
    
    
    if($type == ''){
        $type_err = 'field not inserted';
        // exit();
    }

    else{
        $cattype = $type;

    }
    if($cat == ''){
        $cat_err = "<script>alert('Please fill in all fields.');</script>";
        // exit();
    }

    else{
        $catcat = $cat;
    }

}

else {
    echo "<script>alert('Please fill in all fields.');</script>";
}



    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "NTstore";



    $conn = new mysqli($host, $user, $pass, $dbname);


    if (!$conn){
        die("connection failed: ". mysqli_connect_error());
    }

    if ($conn)
    {  
        // print "connected succeffully";


        $sql_table = "CREATE TABLE IF NOT EXISTS add_device (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            device_name VARCHAR(255) NOT NULL,
            quantity INT(255) NOT NULL,
            device_type VARCHAR(255) NOT NULL,
            category VARCHAR(255) NOT NULL )";
    
        if(mysqli_query($conn, $sql_table)){
    
            // print "table created succesfully";
    
        } else{
            die ("table not created: ". mysqli_error($conn));
    
        }
    
        # ================SENDING DATA TO DATABASE=====================

        if ($catdv!="" && $catcat != "" && $cattype != "" && $catquan != "")
        {
        $sql = "INSERT INTO add_device VALUES ('ID', '$catdv', '$catquan', '$cattype', '$catcat')";
                                        
        $select1 = "SELECT category, quantity FROM add_device";
        $result = mysqli_query($conn, $select1);

        if (mysqli_num_rows($result) == 1) {
            // print "working";
        }
            
        
    
        if(mysqli_query($conn, $sql)){
    
            echo '<script>alert("DEVICE ADDED SUCCESFULLY!"); window.location.href = "add devices form.php";</script>';
    
        } else{
            print "ERROR: $sql.". mysqli_error($conn);
        }
    
    
        mysqli_close($conn);
    }
    else {
        echo '<script>alert("PLEASE RECORD THE REQUIRED FIELDS!"); window.location.href = "add devices form.php";</script>';
    }




}

?>