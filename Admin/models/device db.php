<?php

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
        exit();
      }

      else{
        $catdv = $dvnam;
      }


      if($quantity == '' ){
        $quan_err = 'field not inserted'; 
        exit();
    } 
    
    else {
        $catquan = $quantity;
        
    }
    
    
    if($type == ''){
        $type_err = 'field not inserted';
        exit();
    }

    else{
        $cattype = $type;

    }
    if($cat == ''){
        $cat_err = 'field not inserted';
        exit();
    }

    else{
        $catcat = $cat;
    }

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
        print "connected succeffully";


        $sql_table = "CREATE TABLE IF NOT EXISTS add_device (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            device_name VARCHAR(255) NOT NULL,
            quantity INT(255) NOT NULL,
            device_type VARCHAR(255) NOT NULL,
            category VARCHAR(255) NOT NULL )";
    
        if(mysqli_query($conn, $sql_table)){
    
            print "table created succesfully";
    
        } else{
            die ("table not created: ". mysqli_error($conn));
    
        }
    
        # ================SENDING DATA TO DATABASE=====================

        if ($catdv!="" && $catcat != "" && $cattype != "" && $catquan != "")
        {
        $sql = "INSERT INTO add_device VALUES ('ID', '$catdv', '$catquan', '$cattype', '$catcat')";
                                            
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
    
        

        $select1 = "SELECT category, quantity FROM add_device";
        $result = mysqli_query($conn, $select1);

        if (mysqli_num_rows($result) == 1) {
            print "working";
        }
            
        
    
        if(mysqli_query($conn, $sql)){
    
            print "data stored succesfully <br>";
    
        } else{
            print "ERROR: $sql.". mysqli_error($conn);
        }
    
    
        mysqli_close($conn);
    }




}

?>