<?php
session_start();
include("connection.php");

$nomber=$_SESSION["id"];
   $sql="SELECT fullname FROM user WHERE fullname='$nomber' ";
   $result=mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);




?>

<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" href="ui.css" >
   
<title> Login Page </title>
</head>
<body>


<div class="header">
   
   

        <div class="user">
            <p style="color: beige; font-size: 34px; padding-left: 20px; padding-bottom: 25px;">WELLCOME <br>
                <span style="font-size: 30px; color: rgb(207, 167, 106);">
                <?php
                
                echo $row['fullname'];
                ?></span></p>
                

        </div>
        <div class="title">
            <p style="color: khaki;"><marquee behavior="alternate" direction=""> NATIONAL EXAMINATION COUNCIL OF TANZANIA</marquee></p>
            <p style="font-size: 30px; text-align: center;">INVETORY SYSTEM</p>
            

        </div>
        
   
   

</div>

<div class="context">



    <div class="sidepage"> 

        <div class="menu">
            <p><a href="admin_dashboard.php"><i style="background-color: red;">VIEW DEVICE</a></i></p>
            <p><a href="admin_dashboard.php">%PROFILE</a></p>
            
                 
            <p ><a href="request.php">REQUEST DEVICE</a></p>
            <p><a href="admin_dashboard.php">RETURN DEVICE</a></p>
            <p><a href="logout.php">LOG OUT</a></p>
    
    
    
    
        </div>
    </div>
    <div class="all_context"> 
        <h4>DEVICE AVAILABLE</h4><br>

   <?php
    $dp="SELECT quantity FROM available WHERE device='Hp laptop'";
    $rs=mysqli_query($conn,$dp);
   
   
   
   
   echo $rs;
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   ?>
    
    
    
    

    
    


 


   
    
    
    
    
    
    </div>
    
</div>




<div class="footer">
    

</div>
<body>    
    
</body>     
</html>  