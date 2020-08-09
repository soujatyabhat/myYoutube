<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "video_upload";
$connection = mysqli_connect($host,$username,$password,$database); 
if(!($connection))
    {
        die("Connection Failed".mysqli_connect_error());
    }
?>