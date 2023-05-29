<?php
session_start();
include '../models/security.php';

$catdv = "";
$catquan = "";
$cattype = "";
$catcat = "";




if(isset($_POST['add_device'])){
    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $request_ids = $_POST['request_id'];
    $dvnam = $_POST['dvname'];
    $quantity = $_POST['quantity'];
    $type = $_POST['type'];
    $cat = $_POST['cat'];
     


      if($dvnam == ''){
        // $name_err = "name required";
        exit();
      }

      else{
        $catdv = $dvnam;
      }


      if($quantity == '' ){
        // $quan_err = 'field not inserted'; 
        exit();
    } 
    
    else {
        $catquan = $quantity;
        
    }
    
    
    if($type == ''){
        // $type_err = 'field not inserted';
        exit();
    }

    else{
        $cattype = $type;

    }
    if($cat == ''){
        // $cat_err = 'field not inserted';
        exit();
    }

    else{
        $catcat = $cat;
    }

    $created_date = date('Y-m-d H:i:s');

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


        $sql_table = "CREATE TABLE IF NOT EXISTS Requests (
            user_id INT(255) NOT NULL,
            username VARCHAR(255) NOT NULL,
            request_id VARCHAR(255) NOT NULL,
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            device_name VARCHAR(255) NOT NULL,
            quantity INT(255) NOT NULL,
            device_type VARCHAR(255) NOT NULL,
            category VARCHAR(255) NOT NULL ,
            user_status VARCHAR(255) NOT NULL,
            returns VARCHAR(255) NOT NULL,
            created_at timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
            )";
    
        if(mysqli_query($conn, $sql_table)){
    
            // print "table created succesfully";
    
        } else{
            die ("table not created: ". mysqli_error($conn));
    
        }


            // checking if device in database

        $sql1 = "SELECT * FROM add_device WHERE device_name ='$catdv'";
        $sql2 = "SELECT * FROM add_device WHERE device_type ='$cattype'";

        $result = mysqli_query($conn, $sql1);
        $result1 = mysqli_query($conn, $sql2);

        if(mysqli_num_rows($result) == 0) {
            echo '<script>alert("DEVICE NOT AVAILABLE AT THE MOMENT!"); window.location.href ="requesting process.php";</script>';
            exit();
        }

        elseif(mysqli_num_rows($result1) == 0) {
            echo '<script>alert("DEVICE TYPE NOT FOUND!"); window.location.href ="requesting process.php";</script>';
            exit();
        }

        $row = mysqli_fetch_assoc($result);
        $available_quantity = $row['quantity'];

        if ($catquan > $available_quantity) {
            echo '<script>alert("NO ENOUGH DEVICES!"); window.location.href ="requesting process.php";</script>';
            exit();
        }


            // Update the database

        $new_quantity = $available_quantity - $catquan;
        $sql3 = "UPDATE add_device SET quantity = $new_quantity WHERE device_name = '$catdv'";
        if (mysqli_query($conn, $sql3)) {

            echo '<script>alert("REQUESTED SUCESSFULLY!"); window.location.href ="request device form.php";</script>';
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        # ================SENDING DATA TO DATABASE=====================

        if ($catdv!="" && $catcat != "" && $cattype != "" && $catquan != "")
        {

        $user_status = 'Pending';
        $returns = 'Not Returned';
        $sql = "INSERT INTO Requests VALUES ('$userid','$username','$request_ids', 'ID', '$catdv', '$catquan', '$cattype', '$catcat', '$user_status', '$returns', '$created_date')";
                                            
    
        if(mysqli_query($conn, $sql)){
    
            // print "data stored succesfully <br>";
    
        } else{
            print "ERROR: $sql.". mysqli_error($conn);
        }
    
    
        mysqli_close($conn);
    }




}

?>