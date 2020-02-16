<?php
    require "dbConnect.php";
    $db = get_db();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Spider-Man Suit Details</title>
    <meta charset="utf-8">
    <meta name="author" content="Cameron Chappell">
    <link rel="shortcut icon" href="../../shared/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../shared/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<br><br>
<body>
    <div class="container">
        <h1 style="text-align:center">Spider-Man Suit Details</h1> 
         <?php
            $id = $_GET['id'];
            $statement = $db->prepare("SELECT * FROM suit WHERE id = $id");
            $statement2 = $db->prepare("SELECT name FROM gadget WHERE suit_id = $id");
            $statement->execute();
            $statement2->execute();
            // Go through each result
            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
               // The variable "row" now holds the complete record for that
               // row, and we can access the different values based on their
               // name
               $name = $row['name'];
               $color = $row['color'];
               $image = $row['image'];
               $imageData = base64_encode(file_get_contents($image));
               while ($row2 = $statement2->fetch(PDO::FETCH_ASSOC))
               {
                   $gadget = $row2['name'];
               }
               echo "<p><strong>Name: $name<br>Colors: $color<br>Gadgets:  $gadget<br></strong><p>";
               echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
            }
         ?>
    </div>
</body>
</html>
