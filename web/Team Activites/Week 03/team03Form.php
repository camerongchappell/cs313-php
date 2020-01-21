<html>
<body>
<form action="team03FormPost.php" method="post">
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input name="nameForPHP" type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="emailForPHP" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="passwordForPHP" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="radio" name="major" value="Computer Science"> Computer Science<br>
  <input type="radio" name="major" value="Web Design and Development"> Web Design and Development<br>
  <input type="radio" name="major" value="Computer Information Technology"> Computer Information Technology<br>
  <input type="radio" name="major" value="Computer Engineering"> Computer Engineering<br>
  <textarea name="comments" rows="4" cols="50">

  </textarea>
  <input type="checkbox" name="country" value="North America"> North America<br>
  <input type="checkbox" name="country" value="South America"> South America<br>
  <input type="checkbox" name="country" value="Europe"> Europe<br>
  <input type="checkbox" name="country" value="Asia"> Asia<br>
  <input type="checkbox" name="country" value="Australia"> Australia<br>
  <input type="checkbox" name="country" value="Africa"> Africa<br>
  <input type="checkbox" name="country" value="Antarctica"> Antarctica<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>