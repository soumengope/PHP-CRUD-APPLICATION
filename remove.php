<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
    include('conn.php');
    $id = $_GET['id'];
    $query = "DELETE FROM crudStores WHERE id = $id";
    $res = mysqli_query($conn, $query);
?>
<script>
  setTimeout(function(){
    window.location.href= 'http://localhost';
  },0);
</script>

</body>
</html>