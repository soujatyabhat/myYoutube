<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upload </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
       function check()
        {
            con = confirm("Do you want review the process again ?");
            if (con == true)
            {
                return true;
            }
            else
            {
                return false;
            }
            
        }
    </script>
</head>
<body>
<h1 class = "display-1">  Upload Your Video: </h1>
<div class = "container" id = "display">
        <center>
        <form action = "ACTION/video_set.php" method = "POST" enctype="multipart/form-data" onsubmit = "return check()">
       
        <div class = "form-group">
            <label class = "form-input" style = "float:left"> ID : </label>
                <input type = "text" name = "id" class = "form-control" value = "<?php echo $_GET['u_id']?>" readonly>
            <br>
            <br>

        <div class = "form-group">
            <label class = "form-input" style = "float:left"> Title : </label>
                <input type = "text" name = "title" class = "form-control">
            <br>
            <br>

            <label class = "form-input" style = "float:left">Publish Date : </label>
                <?php date_default_timezone_set('Asia/Calcutta') ?>
                <input type = "text"  class = "form-control" name = "date" value = "<?php echo date("F j, Y, g:i a") ?>" readonly>
            <br>
            <br>

            <label class = "form-input" style = "float:left" required> Video Desciption : </label>
                <textarea cols = "40" rows = "5" class = "form-control" name = "description"></textarea>
            <br>
            <br>
            <label class = "form-input" style = "float:left"> Upload Video:  </label>
                <input type="file" name="file" id="fileToUpload" class = "form-control" required>
            <br>
            <br>

                <input type = "submit" name = "submit"  value = "Upload" class = "form-control btn btn-success col-md-3">
                <input type = "reset" name = "reset" class = "form-control btn btn-danger col-md-3">
        </form>
        </center>
</div>
</div>
</body>
</html>