<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PSVR Store Cart</title>
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
        <h1>Cart</h1><hr>
        <?php
            $size = count($_SESSION['items']);
            for ($i = 0; $i < $size; $i++) {
                $_SESSION['itemsClean'][$i] = htmlspecialchars($_SESSION['items'][$i]);
                echo $_SESSION['itemsClean'][$i];
                echo "<br>";
            }
        ?>
<?php } ?>
<br><h1>Remove Items from Cart<br></h1>
<body>
<form action="" method="post">
  <input type="checkbox" name="item[]" value="PlayStation 4"> PlayStation 4 - $400.00<br>
  <input type="checkbox" name="item[]" value="DualShock 4 Controller"> Sony DualShock 4 Controller - $40.00<br>
  <input type="checkbox" name="item[]" value="Headset"> Headset - $300.00<br>
  <input type="checkbox" name="item[]" value="Camera"> Camera - $60.00<br>
  <input type="checkbox" name="item[]" value="Processor Unit"> Processor Unit - $60.00<br>
  <input type="checkbox" name="item[]" value="AC adapter and power cord"> AC adapter and power cord - $30.00<br>
  <input type="checkbox" name="item[]" value="Move Controllers"> Move Controllers - $100.00<br>
  <input type="checkbox" name="item[]" value="HDMI Cable"> HDMI Cable - $5.00<br>
  <input type="checkbox" name="item[]" value="Micro USB Cable"> Micro USB Cable - $3.00<br>
  <input type="checkbox" name="item[]" value="Earphones"> Earphones - $20.00<br>
  <input type="checkbox" name="item[]" value="Stand"> Stand - $25.00<br><br>

  <button type="submit" name="Submit" class="btn btn-primary">Remove from Cart</button>
</form>
<?php 
    # Removing the items from the cart does not work properly
    if(isset($_POST['Submit'])) { ?>
    <h1>Updated Cart</h1>
    <?php
    if(isset($_POST['Submit'])) {
        $_SESSION['removeItems'] = $_POST['item'];
        $item = $_SESSION['removeItems'];
        unset($_SESSION["items"][$item]);
    }
    $size = count($_SESSION['items']);
    for ($i = 0; $i < $size; $i++) {
        echo $_SESSION['items'][$i];
        echo "<br>";
    }
?>
<?php } ?>
<a href="checkout.php">Checkout</a><br>
<a href="browseItems.php">Back to Store</a>
</html>