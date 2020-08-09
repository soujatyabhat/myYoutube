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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type = "text/javascript">
     $(document).ready(function(){
         $('#submit').click(function(event){
             event.preventDefault();
             $.ajax({
                 url:'ACTION/data_entry.php',
                 method:'post',
                 data: $('#form').serialize(),
                 datatype:'html',
                 success:function(data)
                 {
                     if(data == 1)
                        alert("Data has Submitted");
                    else    
                        {
                        alert("Data has not submitted");
                        location.href = "index.php";
                        }

                 }
             })
         })
     })
     
    </script>
</head>
<body>
<h1 class = "display-1">  Upload Your Video: </h1>
<br>
<div class = "container">
        <form method = "POST" enctype="multipart/form-data" id = "form">
       
        <div class = "form-group">
            <label class = "form-input" style = "float:left"> ID : </label>
            <input type = "text" name = "id" class = "form-control col-md-3" style = "margin-left : 100px;" required>
            <br>
            <br>
        </div>
        <div class = "form-group">
            <label class = "form-input" style = "float:left"> Name : </label>
            <input type = "text" name = "name" class = "form-control col-md-3" style = "margin-left : 100px;"  required>
            <br>
            <br>
        </div>
        <div class = "form-group">
            <label class = "form-input" style = "float:left"> Password : </label>
            <input type = "text" name = "password" class = "form-control col-md-3" style = "margin-left : 100px;"  required>
            <br>
            <br>
            <input type = "submit" name = "submit" id = "submit" value = "Upload" class = "form-control btn btn-success col-md-2">
            <input type = "reset" name = "reset" class = "form-control btn btn-danger col-md-2">
        </form>
        
</div>
</div>
</body>
</html>