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
    <link rel="stylesheet" href="../assets/css/users.css">

    <link rel="stylesheet" href="../assets/css/style2.css">
    <title>USERS</title>
</head>
<body>
   
    
<body style="background-color:#363E4A;">


            <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">USERS</h2>
				</div>
			</div>
        
        <div class="tableS">
            
            <table >
              <thead class="table_user">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Department</th>
                    <th scope="col">Password</th>
                    <th scope="col">Delete</th>
                    
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

              # function display_devices($categorys){

                $id = 1;
              $sql = 'SELECT * FROM users';
              $records = $conn->query($sql);


              if ($records !== false && $records->num_rows > 0) {
                  while ($row = mysqli_fetch_array($records)) {
                      print '<tbody>';
                      print '<tr>';
                      print '<td>' . $id++ . '</td>';
                      print '<td style="color:black;">' . $row['name'] . '</td>';
                      print '<td style="color:black;">' . $row['phone'] . '</td>';
                      print '<td style="color:black;">' . $row['department'] . '</td>';
                      print '<td style="color:red;">' . $row['password'] . '</td>';
                      print '<td><a href=delete_users.php?id='.convert_uuencode($row['phone']) .'> Delete </a></td>';
                      print '</tr>';
                  }
              } else {
                  print 'no records found';
              }
              #}

              #  display_devices('desktop');

              mysqli_close($conn);
              ?>
    
    
            
    
            </tbody>
            </table>
        </div>

        

</body>
</html>