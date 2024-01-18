<?php

$bdServerName = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'myDB';
$conn = mysqli_connect($dbServerName,$dbUser,$dbPass,$dbName);
if(@$conn){
}else{
    die("database not connected.");
}

?>
