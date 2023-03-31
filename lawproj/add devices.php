<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="users.css" />
    <title>ADD DEVICE</title>
</head>
<body>
    
</body>

    <form class="form" action="device db.php" method="POST" enctype="multipart/form-data">
      
    <div class="container" >
  <h1>ADMIN</h1>
  <h2>ADD DEVICES</h2>
    <fieldset class="form-fieldset ui-input __first">
      <input type="text" id="username" tabindex="0" name="dvname" />
      <label for="username">
        <span data-text="Username">Device Name</span>
      </label>
    </fieldset>
    
    <fieldset class="form-fieldset ui-input __second">
      <input type="ext" id="email" tabindex="0" name="quantity" />
      <label for="text">
        <span data-text="E-mail Address">Quantity</span>
      </label>
    </fieldset>
    
    <fieldset class="form-fieldset ui-input __third">
      <input type="text" id="new-password" name="type" />
      <label for="text">
        <span data-text="New Password">Device Type</span>
      </label>
    </fieldset>
    
    <fieldset class="form-fieldset ui-input __fourth">
      <input type="text" id="repeat-new-password" name="cat" />
      <label for="text">
        <span data-text="Repeat New Password">Device category</span>
      </label>
    </fieldset>
    
    <div class="form-footer">
      <button class="btn" type="submit" name="add_device">Submit</button>
    </div>
</div>

    </form>
  </div>

 
</div>


</html>

