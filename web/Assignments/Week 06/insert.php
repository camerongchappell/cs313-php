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
<body>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
require("dbConnect.php");
$db = get_db();

try
{
	$query = 'INSERT INTO login (username, password) VALUES (:username, :password)';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$statement->bindValue(':password', $password);
	
	$errorCheck = $db->prepare("SELECT username FROM login WHERE username = '$username'");
	$errorCheck->execute();
	while ($row = $errorCheck->fetch(PDO::FETCH_ASSOC))
	{
	    $takenUsername = $row['username'];
	}
	if ($username == $takenUsername) {
	    echo '<h1 style="color:white;">Username already taken.</h1>';
	    echo '<a href="login.php">Please try again</a>';
	}
	else {
	$statement->execute();
	// get id of last inserted row - save in $userId
	$userId = $db->lastInsertId("login_id_seq");
	
	header("Location: index.php");
	}
}
catch (Exception $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}

die(); 
?>
</body>
</html>
