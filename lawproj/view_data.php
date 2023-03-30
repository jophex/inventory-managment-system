<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VIEW DATA</title>
</head>



<body style="background-color: white;">


<h1 class="caption">Device View</h1>

    
    <div class="table">
        
        <table>
          <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Device Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Device Type</th>
                <th scope="col">Device category</th>
             </tr>
          </thead>

          <?php
    #=========== displaying devices================

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "NTstore";


    $conn = mysqli_connect($host, $user, $pass, $dbname);
    #$conn = new mysqli($host, $user, $pass, $dbname);


    if (!$conn){
        die("connection failed: ". mysqli_connect_error());
    }
    #  print "connected succeffully";


    #if(isset($_POST['laptop'])){
        
        $sql = "SELECT * FROM add_device WHERE category = 'laptop'";
    
        $records = $conn -> query($sql);
    
            if($records !== false && $records -> num_rows > 0){
                while($row = mysqli_fetch_array($records)){
    
                        print   "<tbody>";
                        print   "<tr>";
                        print   "<td>".$row['id']."</td>";
                        print   "<td>".$row['device_name']."</td>";
                        print   "<td>".$row['quantity']."</td>";
                        print   "<td>".$row['device_type']."</td>";
                        print   "<td>".$row['category']."</td>";
                        print   "</tr>";
            }
        }
    #}

        else{
            print "no records found";
        }

        
        mysqli_close($conn);


            ?>


        

        </tbody>
        </table>
    </div>


</body>
</html>
