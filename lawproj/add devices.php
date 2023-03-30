<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="theme.min.css" />
    <title>ADD DEVICE</title>
</head>
<body>
    
</body><div class="container">
  
    <h2>ADDING DEVICES FORM<small>ADMIN</small></h2>
    
    <form action="device db.php" method="POST" enctype="multipart/form-data">
      
      <div class="group">      
        <input type="text" required name="dvname">
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Device Name</label>
      </div>
        
      <div class="group">      
        <input type="number" required name="quantity">
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Quantity</label>
      </div>

      <div class="group">      
        <input type="text" required name="type">
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Device Type</label>
      </div>

      <div class="group">      
        <input type="text" required name="cat">
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Device category</label>
      </div>
      

      <button title="add_device" type="submit" name="add_device">
        <span>SUBMIT</span> 
      </button>

    </form>
  </div>
</html>

