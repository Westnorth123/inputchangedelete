<?php

$servername= "localhost";
$username= "";
$password= "";
$dbname = "";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);
if (!$koneksi){
        die("Connection Failed:".mysqli_connect_error());
    }
?>