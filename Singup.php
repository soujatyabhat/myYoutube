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
                        {
                            alert("Data has Submitted");
                            location.href = "index.php";
                        }
                    else    
                        {
                        alert("Data has not submitted");
                        }

                 }
             })
         })
     })
     
    </script>
</head>
<body>
<br>
<div class = "container">
<h3> Signup Your Account </h3>
<br>
<form method = "POST" enctype="multipart/form-data" id = "form">
       
        <div class = "form-group">
        <label> User ID : </label> 
            <input type = "text" name = "id" class = "form-control col-md-3" required>

        <br>
        <label> Name : </label> 
            <input type = "text" name = "name" class = "form-control col-md-3" required>

         <br>
        <label> Password : </label> 
            <input type = "password" name = "password" class = "form-control col-md-3" required>
        </div>
        <br>
        <input type = "submit" name = "submit" id = "submit" value = "Upload" class = "form-control btn btn-success col-md-1">
        <input type = "reset" name = "reset" class = "form-control btn btn-danger col-md-1">

<br>
<br>
<a href = "index.php"> Go Back to Index </a>
</form>  
</div>


</div>
</body>
</html>