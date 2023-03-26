<form method="POST">
<input type="text" name="name">
<input type="text" name="phone">

<button name="submit">damn</button>
</form>


<?php
    if(isset($_POST['submit'])){
        $fname = $_POST['name'];
        $phone = $_POST['phone'];

        $name1 = "";
        $phone1 = "";

        if ($fname == ""){
            print "empty name";

        } else {
            $name1 = $fname;
            print $name1."is appended";
        }

        if($phone == "" && !$phone == "10"){
            print "phone is empty and not 10";
        } else {
            $phone1 = $phone;
            print "phone is ok";
        }

    }




?>
