<?php
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Suit</title>
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
      <form action="insertSuit.php" method="POST">
         <div class="form-row">
            <div class="col-lg-3">
               <br><br><h1 style="color:white;"><strong>Create Suit</strong></h1>
               <input type="text" class="form-control" placeholder="Suit Name" name="suitName"><br> <!-- The name="" is what gets passed over in the post -->
               <input type="text" class="form-control" placeholder="Main Colors, i.e., Red/Blue/White" name="color"><br>
               <input type="text" class="form-control" placeholder="Signature Gadget" name="gadget"><br>
               <input type="text" class="form-control" placeholder="Image Address" name="image"><br>
               <input type="text" class="form-control" placeholder="Year Created" name="year"><br>
               <!-- Details<br><textarea name="comment" rows="10" cols="30"></textarea>  -->
                    <?php
                        $statement = $db->prepare("SELECT * FROM suit");
                        $statement->execute();
                        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                        {
                           $id   = $row['id'];
                           $name = $row['suitName'];
                           $color = $row['color'];
                           $image = $row['image'];
                           $year_created = $row['year'];
                           $statement2 = $db->prepare("SELECT name FROM gadget WHERE suit_id = $id");
                           $statement2->execute();
                           while ($row2 = $statement2->fetch(PDO::FETCH_ASSOC))
                           {
                               $gadget = $row2['gadget'];
                           }
                        }
                     ?>
                     <button class="btn btn-primary" type="submit">Create</button><br>
                     <a href="index.php">Back</a>
            </div>
         </div>
      </form>
   </div>
</body>
</html>