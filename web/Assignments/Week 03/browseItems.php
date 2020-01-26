<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PSVR Store</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="team01.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="browseItems.js"></script>
  <link rel="stylesheet" type="text/css" href="assign03.css">
</head>
<h1>PlayStation 4 Virtual Reality (PSVR) Store</h1><hr>
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

  <button type="submit" name="Submit" onclick="buttonClick()" class="btn btn-primary">Add to Cart</button>
</form>
  <?php
    // Start the session
    session_start();
    if(isset($_POST['Submit'])) {
        $_SESSION['items'] = $_POST['item'];
    }
  ?>
<a href="viewCart.php">View Cart</a>
</body>
</html>