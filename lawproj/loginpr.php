<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "necta_db";

$conn = mysqli_connect($servername, $username, $password,$db);

if(!$conn)
{
    echo"failed to connect";
}
 
else
{
    if($_SERVER ["REQUEST_METHOD"]  == "POST")
    {
           $getPass=$_POST["password"];
            $getname=$_POST["fullname"];
        
        if (Empty($getname) && Empty($getPass))
        {
            Echo" <h2>please fill all filed</h2>";
       
            
        }
        else
        {
            $sql="SELECT * FROM user WHERE fullname ='$getname' AND password='$getPass' ";
            $rst=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($rst, MYSQLI_ASSOC);
            $_SESSION['id']=$row["fullname"];
           
           
        
  

            if ($row["password"]==$getPass  && $row["fullname"]==$getname) 
            {
           header("location: Dashboard.php");
                     
            }
            else
            {
                echo "<script>alert('incorrect password or email please login again');document.location='loginform.php'</script>";
                
              
                
    
            }
            
            
            
            


        
        }
    
     
       
     
   
   
    }


    

}
?>