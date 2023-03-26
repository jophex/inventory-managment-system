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
<style></style>

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
            <p><a href="dashboard.php">VIEW DEVICE</a></p>
            <p><a href="admin_dashboard.php">%PROFILE</a></p>
            
            <p><a href="request.php">REQUEST DEVICE</i></a></p>
            <p><a href="return.php"><i style="background-color: red;">RETURN DEVICE</a></i></p>
            <p><a href="logout.php">LOG OUT</a></p>
    
    
    
    
    </div>
    </div>
    <div class="all_context">
     <h4>RETURN DEVICE HERE</h4>
    <form action="requestpr.php" method="POST">
        <label>Device type</label>
        <select name="device"  >
    <option>Hp laptop</option>
    <option>Dell laptop</option>
    <option>Switch</option>
    <option>Printer</option>
    <option>Scaner</option>
    </select>
        <br>
        <br>
        <br>
    
    
        <label>Quantity</label>
        <select name="quantity"  >
        <?php
            $quantity=range(1,300);
            for($quantity=1;$quantity<=300;$quantity++)
            {
                echo  "<option>$quantity</option>";
            }
        ?>
           </select>
            <br>
            <br>

    
       <input type="submit" name="submit"  value="submit" style="background-color: rgb(15, 221, 60);">
    
    </form>
    
    
    
    
    
    
    
    </div>
    
</div>




<div class="footer">
    

</div>
<body>    
    
</body>     
</html>  