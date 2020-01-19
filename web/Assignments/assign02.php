<!DOCTYPE html>
<html>

<head>
<title>Cameron Chappell's Home Page</title>
<link rel="stylesheet" type="text/css" href="assign02.css">
<script src="assign02.js"></script>
</head>

<body>

<h1>Welcome to Cameron Chappell's Home Page</h1>
<hr>
<div class="imgWithText">
    <img src="me.jpg" alt="Picture of my wife and I." />
</div>
<p class="sentence">My name is Cameron Chappell, my major is computer science, and I am from Vicksburg, Mississippi.  I like to hang out with family and friends, go snowboarding, play paintball and video games, and watch the tv show <em>The Office</em>.  Which is where a favorite my quote of mine is from.</p>

<p class="sentence">Here is one of my favorite quotes:</p><blockquote class="sentence" cite="https://uproxx.com/tv/quotes-from-the-office-michael-scotts-best-lines/">"You miss 100% of the shots you don't take. -Wayne Gretzky"-Michael Scott</blockquote><br>

<button type="button" onclick="buttonClick();">Click Me</button><br><br>
<a href="assignments.html">CS 313 Assignments</a><br>

<div class="sentence">
<?php 
date_default_timezone_set("America/Denver");
echo date("D M d, Y G:i a");
?>
</div>
</body>

</html>
