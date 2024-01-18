<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <title>PACRUD</title>
    <style type="text/css">
        #client{padding-bottom:2rem;}
        #client a{text-decoration:none;font-size:1rem;color:black;}
        #hdr{width:90%;background:gray;color:white;}
        #hdr th{padding-top:0.8rem; padding-bottom:0.8rem;}
        #contnt{text-align:center;background:rgb(167, 188, 216);}
        #contnt td{padding-top:0.5rem;padding-bottom:0.5rem;}
        #remove{margin-left:10px;}
        button a{text-decoration:none;}
    </style>
</head>
<body>
    <?php include_once('conn.php') ?>
    <h2>PHP & AJAX CRUD APPLICATION</h2>
    <div id="client">
        <button><a href="newEntry.php">ADD NEW</a></button>
    </div>
    <div id="main_crud">
    <table>
        <tr id="hdr">
            <th width="3%">ID</th>
            <th width="12%">FULL NAME</th>
            <th width="13%">EMAIL</th>
            <th width="10%">PHONE</th>
            <th width="22%">ADDRESS</th>
            <th width="10%">ACTION</th>
        </tr>
        <?php
            $sql = "SELECT * FROM crudStores LIMIT 10";
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0) {
                $id = 1;
                while($row=mysqli_fetch_assoc($result)){
                    echo '<tr id="contnt">';
                        echo '<td>';echo $id;echo'</td>';
                        $id = $id+1;
                        echo '<td>'; echo $row["fullName"]; echo'</td>';
                        echo '<td>'; echo $row["email"]; echo '</td>';
                        echo '<td>'; echo $row["phone"]; echo'</td>';
                        echo '<td>';echo $row["addr"]; echo'</td>';
                        echo '<td>';
                           echo '<button id="update"><a href="updateUser.php?id=';echo $row['id'];echo '">UPDATE</a></button>';
                           echo '<button id="remove"><a href="remove.php?id=';echo $row['id'];echo '">REMOVE</a></button>';
                }
            }else{
                echo 'No result found';
            }
        ?>
        
    </table>
    </div>
</body>
</html>