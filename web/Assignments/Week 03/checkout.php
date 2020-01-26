<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PSVR Store Checkout</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="team01.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="browseItems.js"></script>
  <link rel="stylesheet" type="text/css" href="assign03.css">
</head>
<h1>Checkout</h1><hr>
<br><h1>Enter Address<br></h1>
<form action="confirmation.php" method="post">
  <div class="form-group">
    <label for="streetNumber">Street Number</label><br>
    <input name="streetNumber" type="text" class="col-xs-2" id="streetNumber" aria-describedby="nameHelp" placeholder="Enter Street Number"><br>
  	<label for="streetName">Street Name</label><br>
    <input name="streetName" type="text" class="col-xs-2" id="streetName" aria-describedby="nameHelp" placeholder="Enter Street Number"><br>
  	<label for="city">City</label><br>
    <input name="city" type="text" class="col-xs-2" id="city" aria-describedby="nameHelp" placeholder="Enter City"><br>
  	<label for="state">State</label><br>
    <input name="state" type="text" class="col-xs-2" id="state" aria-describedby="nameHelp" placeholder="Enter State"><br>
  	<label for="zip">Zip Code</label><br>
    <input name="zip" type="text" class="col-xs-2" id="zip" aria-describedby="nameHelp" placeholder="Enter Zip Code"><br>
  </div>
  <button type="submit" class="btn btn-primary">Complete Purchase</button>
</form>
<body>
<a href="viewCart.php">Return to cart</a>
</html>