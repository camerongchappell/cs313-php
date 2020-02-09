<?php
    require "dbConnect.php";
    $db = get_db();
    $suitData = NULL;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Spider-Man Suit List</title>
    <meta charset="utf-8">
    <meta name="author" content="Cameron Chappell">
    <link rel="shortcut icon" href="../../shared/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../shared/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assign05.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<br><br>
<body>
    <div class="container">
        <h1 style="text-align:center">Spider-Man Suit List</h1><br>
        <div class="row">
            <div class="col-lg-6">
                <?php
                    $statement = $db->prepare("SELECT * FROM suit");
                    $statement->execute();
                    // Go through each result
                    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                    {
                        // The variable "row" now holds the complete record for that
                        // row, and we can access the different values based on their
                        // name
                        $name = $row['name'];
                        $id = $row['id'];
                        echo "<p><strong><a href='suitDetails.php?id=$id'>$name</a></strong><p>";
                    }
                ?>
            </div>
            <div class="col-lg-6">
                <h2>Search</h2>
                <form id="" method="post" action="" class="form-inline">
                    <input type="text" name="suitSearch" class="form-control mb-2 mr-sm-2" style="width:70%" id="inlineFormInputName2" placeholder="Search for a Spider-Man Suit">
                    <button type="submit" value="Search" name="search" class="btn btn-primary mb-2" style="width:25%">Search</button>
                </form>
                <?php 
                    if (isset($_POST['search'])) {
                        $searchString = $_POST['suitSearch'];
                        $suitData = $db->prepare("SELECT * FROM suit WHERE name = '$searchString'");
                        $suitData->execute();
                        while ($row = $suitData->fetch(PDO::FETCH_ASSOC))
                        {
                            $name = $row['name'];
                            $color = $row['color'];
                            $id = $row['id'];
                            $statement = $db->prepare("SELECT name FROM gadget WHERE suit_id = $id");
                            $statement->execute(); 
                            while ($row2 = $statement->fetch(PDO::FETCH_ASSOC))
                            {
                                $gadget = $row2['name'];
                            }
                            echo "<p><strong>Name: $name<br>Colors: $color<br>Gadgets:  $gadget<p>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
