<?php
    include('conn.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];

        $errorEmpty = false;
        $errorEmail = false;
        $errorPhone = false;
        $errorName = false;
        $errorAddress = false;
        
        if(empty($name) || empty($email) || empty($phone) || empty($address)){
            echo "Fill all the fields";
            $errorEmpty = true;
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Invalid Email, write a valid email";
            $errorEmail = true;
        }else if(strlen($name) < 5){
            echo "Invalid Name , minumum length must be 5";
            $errorName = true;
        }else if(strlen($phone) < 14){
            echo "Invalid Phone , write a 10 digit phone with country code";
            $errorPhone = true;
        }else if(strlen($address) < 10){
            echo "Invalid Address , minumum length must be 10";
            $errorAddress = true;
        }else{
            $sql = "UPDATE `crudStores` SET `fullName`='$name',`email`='$email',`phone`='$phone',`addr`='$address' 
            WHERE `email`='$email' ";
            $res = mysqli_query($conn,$sql);
            echo "Successfully updated data in database";
        } 
    }
?>
<script>
    var errorEmpty = "<?php echo $errorEmpty; ?>"
    var errorEmail = "<?php echo $errorEmail; ?>"
    var errorPhone = "<?php echo $errorPhone; ?>"
    var errorName = "<?php echo $errorName; ?>"
    var errorAddress = "<?php echo $errorAddress; ?>"

    if(errorEmpty==true ||errorEmail==true || errorName==true || errorPhone==true || errorAddress==true){
        $('#msg').addClass('red').removeClass('green');
    }

    if(errorEmpty==false && errorEmail==false && errorName==false && errorPhone==false && errorAddress==false){
        $('#msg').addClass('green').removeClass('red');
        setTimeout(function () {
            window.location.href= 'http://localhost';
        },2000);
    }
    </script>
