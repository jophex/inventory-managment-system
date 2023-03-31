<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="users.css">
    <title>USERS</title>
</head>
<body>
    
<body style="background-color: white;">


    <h1 class="caption">USERS</h1>
    
        
        <div class="tableS">
            
            <table >
              <thead class="table_user">
                <tr>
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
            
                $sql = "SELECT * FROM users"; #WHERE category = 'laptop'";
    
                $records = $conn->query($sql);
    
                if ($records !== false && $records->num_rows > 0) {
                    while ($row = mysqli_fetch_array($records)) {
                        print '<tbody>';
                        print '<tr>';
                        print '<td>' . $row['name'] . '</td>';
                        print '<td>' . $row['phone'] . '</td>';
                        print '<td>' . $row['department'] . '</td>';
                        print '<td>' . $row['password'] . '</td>';
                        print "<td><a href=delete.php?id=".$row['phone']."> Delete </a></td>";
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