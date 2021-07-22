<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online food ordering</title>
   <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/signin.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<div class="container-fluid bg">
    <div class="row justify-content-center text-color:white">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form action="in_valid.php" method="post" class="form-container">
            <h1>Login Form</h1>   
            <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id = "email" name="email" placeholder="Enter Email" required>
                    <?php if(isset($id_error)){
                        echo "<p style='color:#e60017'>".$id_error."</p>" ;
                     } ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <?php if(isset($password_error)){
                        echo "<p style='color:#e60017'>".$password_error."</p>" ;
                     } ?>
                </div>
                <button type="submit" class="btn btn-success btn-block">Signin</button>
                <div class="anchor">
                <a href="#">Forgot Password?</a>
                </div>
                <div class="anchor">
                <a href="signup.php">New User? Signup</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>