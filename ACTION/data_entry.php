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
$uid = htmlspecialchars($_REQUEST['id']);
$name = htmlspecialchars($_REQUEST['name']);
$password = htmlspecialchars($_REQUEST['password']);
$sql = "insert into user (u_id,name,u_password)values('$uid','$name','$password')";
$result = mysqli_query($connection,$sql);
if($result)
    {
        echo "1";
    }
else
    {
        echo "0";
    }
?>