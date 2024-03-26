<?php
$servername="localhost";
$username="root";
$password="";
$dbname="w0207";


//check connection

$link = mysqli_connect($servername, $username, $password, $dbname) or die(mysqli_error($link));
//echo "Connected to the database successfully";
?>