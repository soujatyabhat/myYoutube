<?php
include 'connect.php';
$id = $_GET['v_id'];
$sql = "delete from u_video where v_id = '$id'";
unlink("upload/".$id);
mysqli_query($connection,$sql);
header("location:../dashboard.php");
?>