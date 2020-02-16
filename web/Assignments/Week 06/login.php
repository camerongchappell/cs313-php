<?php
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="author" content="Cameron Chappell">
    <link rel="shortcut icon" href="../../shared/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../shared/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assign06.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<br><br>
<body>
   <div class="container" style="margin-top:25px;">
      <!-- I have not implemented this yet -->
      <form action="insert.php" method="POST">
         <div class="form-row">
            <div class="col-lg-3">
               <h1 style="color:white;"><strong>Login</strong></h1>
               <input type="text" class="form-control" placeholder="Username" name="username"><br>
               <input type="password" class="form-control" placeholder="Password" name="password"><br>
                                    <?php
                        $statement = $db->prepare("SELECT * FROM login");
                        $statement->execute();
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                        {
                           $id   = $row['id'];
                           $username = $row['username'];
                           $password = $row['password'];
                        }
                     ?>
                     <button class="btn btn-primary" type="submit">Log in</button>
            </div>
         </div>
      </form>
      <form action="insert.php" method="POST">
         <div class="form-row">
            <div class="col-lg-3">
               <br><br><h1 style="color:white;"><strong>New User? Sign up!</strong></h1>
               <input type="text" class="form-control" placeholder="Username" name="username"><br>
               <input type="password" class="form-control" placeholder="Password" name="password"><br>
                                    <?php
                        $statement = $db->prepare("SELECT * FROM login");
                        $statement->execute();
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                        {
                           $id   = $row['id'];
                           $username = $row['username'];
                           $password = $row['password'];
                        }
                     ?>
                     <button class="btn btn-primary" type="submit">Sign Up</button>
            </div>
         </div>
      </form>
   </div>
</body>
</html>