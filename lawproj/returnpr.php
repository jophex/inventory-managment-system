

<!doctype html>
<html>
<body>

<?php



                $servername = "localhost";
                $username = "root";
                $password = "";
                $db = "necta_db";

    $conn = mysqli_connect($servername, $username, $password,$db);

if(mysqli_connect_error())
{
    echo"failed to connect";
 
}

else
{
        $device=$_POST['device'];
        $quantity=$_POST['quantity'];

            $sql="INSERT INTO returntb(device,quantity) VALUES('$device',' $quantity')";

     $result=mysqli_query($conn,$sql);
    

                    if ($result)
                    {
   
   
                       echo "<script>alert('you have succesfully return device');document.location='return.php'</script>";

    
  
                    }
                    else
                    {
                        
                        echo "request failed";
                   }
 
}


?>

</body>
</html>