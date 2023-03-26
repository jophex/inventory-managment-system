<?php



if(isset($_POST['lgn_btn'])){

    $lgn_phone = $_POST['lgn_phone'];
    $lgn_pass = $_POST['lgn_pass'];


    $phone = "/^0[67][^346, ^02]\d{7}$/";




   # if(!empty($lgn_phone) && !empty($lgn_pass)){
        
        // Check if username is empty
        if($lgn_phone == '' || !preg_match($phone, $lgn_phone)){
            echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>Please enter Username</div>';
            
        }
        else {
            print "shit is working fine";
        }

        // Check if passwords are empty
        if($lgn_pass == ''){
            echo 'Please enter  passwords';
            exit();
        }

   # }

}


#===============DATABASE=============
















































?>