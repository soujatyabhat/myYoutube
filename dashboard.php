<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Video </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class = "container">
    <?php session_start(); ?>
    
    <p style = "padding:30px;"> <?php echo "User ID : ". $_SESSION["u_id"]."<br>" ."User Name : ". $_SESSION["u_name"]?> <a href = "ACTION/logout.php" class = "btn btn-danger" style = "float:right;"> Logout </a> </p> 
    <?php
        include 'ACTION/connect.php';
        $id = $_SESSION["u_id"];
        $sql1 = "select *from u_video";
        $result1 = mysqli_query($connection,$sql1);
        $countROW = mysqli_num_rows($result1);
        $sql = "select *from u_video where u_id = '$id'";
        if($result = mysqli_prepare($connection,$sql))
        {
            mysqli_stmt_bind_result($result,$col1,$col2,$col3,$col4,$col5);
            $row = mysqli_stmt_execute($result);
?>
<table border = "5" class="table table-dark table-striped"  align = "center">
    <tr align = "center">
                 <th> Title </th>  <th> Decription </th> <th> Publish Date </th> <th colspan = "2" style = "width : 20px;"> Controls </th> 
     </tr>           
<?php
    if ($countROW == 0)
            {
?>              
                <tr align = "center">
                    <td colspan = "4"> Fields Are Empty</td>
                </tr>

<?php            
            }

        while($check = mysqli_stmt_fetch($result))
        {
?>        
            <tr align = "center">
                 <td> <?php echo $col3?> </td>  <td> <?php echo $col4?> </td> <td> <?php echo $col5 ?> </td> <td colspan = "2"> <a href = "display.php?v_id=<?php echo $col1?>" class = "btn btn-success col-md-4"> Watch Video </a> <a href = "ACTION/delete.php?v_id=<?php echo $col1?>" class = "btn btn-warning" style = "float:right;"> Delete Video </a> </td>
            </tr>
<?php
        }
    
    }
?>
</table>
<?php
mysqli_stmt_close($result);
mysqli_close($connection);
?>
<br>
<a class = "btn btn-primary " href = "upload.php?u_id=<?php echo $_SESSION["u_id"]?>"> Upload New Video </a>
</div>
</body>
</html>