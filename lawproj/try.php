<?php
/*session_start();
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
            $getmail=$_POST["email"];
        
        if (Empty($getmail) && Empty($getPass))
        {
            Echo" <h2>please fill all filed</h2>";
       
            
        }
        else
        {
            $sql="SELECT * FROM user WHERE email ='$getmail' AND password='$getPass' ";
            $rst=mysqli_query($conn,$sql);
            $row=mysqli_fetch($rst, MYSQLI_ASSOC);
            $_SESSION['id']=$row["fullname"];
           
           
        
  

            if ($row["password"]==$getPass  && $row["email"]==$getmail) 
            {
               header("location: dashboard.php");
             
            }
            else
            {
                echo "<script>alert('incorrect password or email please login again');document.location='loginform.php'</script>";
                
              
                
    
            }*/
            
            
            
            


        
        }
    
     
       
     
   
   
    }


    

}
?>