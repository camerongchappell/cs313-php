<!DOCTYPE html>
<html>
<head>
    <title>Create Suit</title>
    <meta charset="utf-8">
    <meta name="author" content="Cameron Chappell">
    <link rel="shortcut icon" href="../../shared/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../shared/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="error.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<?php
require("dbConnect.php");
$db = get_db();
$name = $_POST['suitName'];
$color = $_POST['color'];
$image = $_POST['image'];
$year = $_POST['year'];
$gadget = $_POST['gadget'];
$info = $_POST['info'];
if (!isset($name) || $name == "" || !isset($color) || $color == "" || !isset($image) || $image == "" || !isset($year) || $year == "" || !isset($gadget) || $gadget == "" || !isset($info) || $info == "")
{
    echo '<h1 style="color:blue;"><strong>All fields must be filled.</strong></h1>';
    echo '<a href="createSuit.php"><strong>Please try again</strong></a>';
    die();
}
else {
    $name = htmlspecialchars($name);
    $color = htmlspecialchars($color);
    $image = htmlspecialchars($image);
    $year = htmlspecialchars($year);
    $gadget = htmlspecialchars($gadget);
    $info = htmlspecialchars($info);
    try
    {
    	$query = 'INSERT INTO suit (name, color, image, year_created, info) VALUES (:suitName, :color, :image, :year, :info)';
    	$statement = $db->prepare($query);
    	$statement->bindValue(':suitName', $name);
    	$statement->bindValue(':color', $color);
    	$statement->bindValue(':image', $image);
    	$statement->bindValue(':year', $year);
    	$statement->bindValue(':info', $info);
    	$errorCheck = $db->prepare("SELECT name FROM suit WHERE name = '$name'");
    	$errorCheck->execute();
    	while ($row = $errorCheck->fetch(PDO::FETCH_ASSOC))
    	{
    	    $takenSuitName = $row['name'];
    	}
    	if ($name == $takenSuitName) {
    	    echo '<h1 style="color:blue;"><strong>Suit already in database.</strong></h1>';
    	    echo '<a href="createSuit.php"><strong>Please try again</strong></a>';
    	}
    	else {
        	$statement->execute();
        	$getId = $db->prepare("SELECT * FROM suit");
        	$getId->execute();
        	while ($row = $getId->fetch(PDO::FETCH_ASSOC))
        	{
        	    $id   = $row['id'];
        	}
        	$query2 = 'INSERT INTO gadget (name, suit_id) VALUES (:gadget, :id)';
        	$statement2 = $db->prepare($query2);
        	$statement2->bindValue(':gadget', $gadget);
        	$statement2->bindValue(':id', $id);
        	$statement2->execute();
        	
        	header("Location: index.php");
    	}
    }
    catch (Exception $ex)
    {
    	echo "Error with DB. Details: $ex";
    	die();
    }
    die(); 
}
?>
</body>
</html>
