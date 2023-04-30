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


        $sql_table = "CREATE TABLE IF NOT EXISTS Notifications (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            device_name VARCHAR(255) NOT NULL,
            quantity INT(255) NOT NULL,
            device_type VARCHAR(255) NOT NULL,
            category VARCHAR(255) NOT NULL ,
            user_status VARCHAR(255) NOT NULL)";
    
        if(mysqli_query($conn, $sql_table)){
    
            print "table created succesfully";
    
        } else{
            die ("table not created: ". mysqli_error($conn));
    
        }

        $sql1 = "SELECT * FROM add_device WHERE device_name ='$catdv'";
        $sql2 = "SELECT * FROM add_device WHERE device_type ='$catcat'";

        $result = mysqli_query($conn, $sql1);
        $result1 = mysqli_query($conn, $sql2);
        if(mysqli_num_rows($result) == 0) {
            echo "Device not Available";
            exit();
        }

        elseif(mysqli_num_rows($result1) == 0) {
            echo "Device type not Available";
            exit();
        }

        $row = mysqli_fetch_assoc($result);
        $available_quantity = $row['quantity'];

        if ($catquan > $available_quantity) {
            echo "Not enough devices available";
            exit();
        }

        







    
        # ================SENDING DATA TO DATABASE=====================

        if ($catdv!="" && $catcat != "" && $cattype != "" && $catquan != "")
        {

        $user_status = 'Pending';
        $sql = "INSERT INTO Notifications VALUES ('ID', '$catdv', '$catquan', '$cattype', '$catcat', '$user_status')";
                                            
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
    }




}

?>