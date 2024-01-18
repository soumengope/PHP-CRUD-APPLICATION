<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PACRUD UPDATE USER</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <style type="text/css">
        body{margin:0; padding:0;color:black;background:gray;}
        h2{text-align:center;}
        p{text-align:center;padding-top:1rem;color:black;}
        #main_control{padding-top:2rem;position:relative;left:35%;}
        .newClient_div{display:flex;justify-content:left;padding-bottom:2rem;text-align:left;}
        .innp{position:absolute;left:10em;}
        .lbl {padding-top:0.5rem;}
        .newClient_div input{width:300px; height:30px;font-size:1rem;}
        #submit{text-align:center;width:100px; height:40px;font-size:1rem;cursor:pointer;}
        #subHom{display:flex;gap:1rem;justify-content:center;padding-top:1rem;padding-left:8rem;}
        #home button{width:100px;height:40px;text-align:center;font-size:1rem;}
        #home a{text-decoration:none;color:black;}
        .red{color:red;background:white;padding-bottom:0.5rem;}
        .green{color:green;background:white;padding-bottom:0.5rem;}
    </style>
</head>
<body>
    <script>
        $(document).ready(function(){
            $('form').submit(function(event){
                event.preventDefault();
                var name = $('#name').val();
                var email = $('#email').val();
                var phone = $('#phone').val();
                var address = $('#addr').val();
                var submit = $('#submit').val();
                $('#msg').load("updateHandler.php",{
                    name : name,
                    email : email,
                    phone : phone,
                    address : address,
                    submit : submit
                });
            });
        });
    </script>
    <h2>UPDATE YOUR DATA</h2>
    <?php
      require('conn.php');
      $id = $_GET["id"];
      $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM crudStores WHERE id = $id"));
    ?>
    <p id="msg"></p>
    <form action="updateHandler.php" method="POST">
    <div id="main_control">
        <div class="newClient_div">
            <div class="lbl"><label for="name">Full Name </label></div>
            <div class="innp"><input type="text" id="name" value="<?php echo $rows['fullName']; ?>"></div>
        </div>
        <div class="newClient_div">
            <div class="lbl"><label for="email">Email </label></div>
            <div class="innp"><input type="text" id="email" value="<?php echo $rows['email']; ?>"></div>
        </div>
        <div class="newClient_div">
            <div class="lbl"><label for="phone">Phone </label></div>
            <div class="innp"><input type="text" id="phone" value="<?php echo $rows['phone']; ?>"></div>
        </div>
        <div class="newClient_div">
            <div class="lbl"><label for="addr">Address</label></div>
            <div class="innp"><input type="text" id="addr" value="<?php echo $rows['addr']; ?>"></div>
        </div>
        
    </div>
    <div id="subHom">
        <div id="submit"><input type="submit" id="submit" value="Update"></div>
        <div id="home"><button><a href="index.php">Cancel</a></button></div>
    </div>
    </form>
</body>
</html>