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
    <link rel="stylesheet" type="text/css" href="suit.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<br><br>
<body>
   <div id="login">
      <div class="container">
         <h1 class="text-white font-weight-bold pt-6">Create Suit</h1>
         <div id="login-row" class="row justify-content-left align-items-center">
               <div id="login-column" class="col-md-6">
                  <div id="login-box" class="col-md-12">
                     <form id="login-form" class="form" action="insertSuit.php" method="post">
                           <div class="form-group">
               			   <label for="suitName" style="color:#f2f2f2" class="font-weight-bold">Suit Name:</label><br>
               			   <input type="text" class="form-control" placeholder="Name" name="suitName"><br>
                           </div>
                           <div class="form-group">
           			   	   <label for="color" style="color:#f2f2f2" class="font-weight-bold">Main Colors:</label><br>
               			   <input type="text" class="form-control" placeholder="Red/Blue/White" name="color"><br>
                           </div>
                           <div class="form-group">
          			       <label for="gadget" style="color:#f2f2f2" class="font-weight-bold">Signature Gadget:</label><br>
               			   <input type="text" class="form-control" placeholder="Gadget Name" name="gadget"><br>
                           </div>
                           <div class="form-group">
       			           <label for="image" style="color:#f2f2f2" class="font-weight-bold">Image:</label><br>
               			   <input type="text" class="form-control" placeholder="Image Address" name="image"><br>
                           </div>
                           <div class="form-group">
          			       <label for="year" style="color:#f2f2f2" class="font-weight-bold">Year Created:</label><br>
              			   <input type="text" class="form-control" placeholder="Year" name="year"><br>
                           </div>
                           <div class="form-group">
        		           <label for="details" style="color:#f2f2f2" class="font-weight-bold">Details:</label><br>
               			   <textarea rows="9" cols="62" name="info" placeholder="Insert details or info about the suit, history, etc."></textarea>
                           </div>
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
                           <div class="form-group text-center">
                              <input type="submit" name="submit" class="btn btn-primary btn-md" value="Create">
                           </div>
                           <div class="form-group text-center font-weight-bold">
                              <a href="index.php">Back</a>
                           </div>
                     </form>
                  </div>
               </div>
         </div>
      </div>
   </div>
</body>
</html>