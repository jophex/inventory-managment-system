<?php
session_start();

include '../models/admin_security.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <link rel="stylesheet" href="../assets/css/style2.css">
    <title>NOTIFICATION PANEL</title>
</head>

<body style="background-color:#363E4A;">

		<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">REQUESTS</h2>
				</div>
			</div>

    
    <div class="table">
        
        <table>
          <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">user name</th>
                <th scope="col">Device Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Device Type</th>
                <th scope="col">Device category</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                
             </tr>
          </thead>




          <?php
          
          #=========== displaying devices================

          $host = 'localhost';
          $user = 'root';
          $pass = '';
          $dbname = 'NTstore';

          $conn = mysqli_connect($host, $user, $pass, $dbname);

          #$conn = new mysqli($host, $user, $pass, $dbname);

          if (!$conn) {
              die('connection failed: ' . mysqli_connect_error());
          }
          #  print "connected succeffully";

          function display_devices()
          {
              global $conn;
              $category = '';

              if (isset($_GET['cate'])) {
                  $category = $_GET['cate'];
              }
              $ids = 1;
              $sql = 'SELECT * FROM  Requests ORDER BY `created_at` DESC';
             # $sql = "SELECT * FROM Requests LEFT JOIN users ON users.phone = requests.user_id ORDER BY `created_at` DESC'";

              //   WHERE category = '$category' GROUP BY device_type
             
              
              $records = $conn->query($sql);

              if ($records !== false && $records->num_rows > 0) {
                  while ($row = mysqli_fetch_array($records)) {
                 
                      print '<tbody>';
                      print '<tr>';
                      print '<td>' . $ids++ . '</td>';
                      print '<td>' . $row['username'] . '</td>';
                      print '<td>' .$row['device_name'] .'<br>' .'</td>';
                      print '<td>' . $row['quantity'] . '</td>';
                      print '<td>' . $row['device_type'] . '</td>';
                      print '<td>' . $row['category'] . '</td>';
                      


                      print ' <td class="status"><span class="active"><a href="admin_responces.php?accept=true&id='.$row['id'].'">
                      Accept 
                      </a></span></td>';

                      print ' <td class="status"><span class="active"><a href="admin_responces.php?reject=true&id='.$row['id'].'">
                      Reject 
                      </a></span></td>';
                      print ' <td class="status"><span class="active"><a href="admin_responces.php?return=true&id='.$row['id'].'">
                      Returned 
                      </a></span></td>';
                  }
              } else {
                  print 'no records found';
              }
          }
          display_devices();

          // counting devices in sql

          mysqli_close($conn);
          ?>

           <!-- <td class='status' name="accept"><span class='active'><a href="watever.php?"> Accept </a></span></td>
           <td class="status border-bottom-0"><span class="waiting"><a href="#"> Reject </a></span></td>

		 -->
        </tr>

        
        

        </tbody>
        </table>
    </div>

   

</body>
</html>
