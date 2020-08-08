<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "video_upload";
$connection = mysqli_connect($host,$username,$password,$database); 
if(!($connection))
    {
        die("Connectio Failed".mysqli_connect_error());
    }
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
                echo "dashboard.php?"."u_id=".$_SESSION["u_id"]."&"."u_name=".$_SESSION["u_name"];
            }
        else
            {
                echo "0";
            }
}
mysqli_stmt_close($result);
mysqli_close($connection);
?>