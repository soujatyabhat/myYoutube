<?php
include 'connect.php';
$aid = $_POST['ID'];
$apassword = $_POST['password'];
$sql = "select * from user where u_id = '$aid' and u_password = '$apassword'";
if($result = mysqli_prepare($connection,$sql))
{
        
        mysqli_stmt_bind_result($result,$id,$name,$password);
        mysqli_stmt_execute($result);
        $check = mysqli_stmt_fetch($result);
        if (($aid == $id) && ($password == $apassword))
            {
                session_start();
                $_SESSION["u_id"] = $id;
                $_SESSION["u_name"] = $name;
                header("location:../dashboard.php");
            }
        else
            {
                echo "0";
            }
}
mysqli_stmt_close($result);
mysqli_close($connection);
?>