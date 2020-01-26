<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PSVR Store Confirmation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="team01.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="browseItems.js"></script>
  <link rel="stylesheet" type="text/css" href="assign03.css">
</head>
<?php 
    // start session
    session_start();
    if(isset($_SESSION['items'])) { ?>
    	<h1>Confirmation</h1><hr>
        <?php
            $size = count($_SESSION['items']);
            echo "Purchased $size item(s) on ";
            date_default_timezone_set("America/Denver");
            echo date("D M d, Y ");
            echo "at ";
            echo date("G:i a");
            echo "<br>";
            for ($i = 0; $i < $size; $i++) {
                echo $_SESSION['items'][$i];
                echo "<br>";
            }
        ?>
<?php } ?>
<?php 
    // retrieve Post data
    $streetNumber = htmlspecialchars($_POST["streetNumber"]);
    $streetName = htmlspecialchars($_POST["streetName"]);
    $city = htmlspecialchars($_POST["city"]);
    $state = htmlspecialChars($_POST["state"]);
    $zip = htmlspecialChars($_POST["zip"]);
    
    echo "<br>Congratulations! Your items will be shipped to $streetNumber $streetName, $city, $state $zip.<br>";
?>

<body>
<a href="browseItems.php">Back to Store</a>
</html>