<?php 
   // start session
   session_start();
   // save session variables into local variables; you don't have to do this but it saves you typing
   $c = $_SESSION['favcolor'];
   $a = $_SESSION['favanimal'];
?>
<h1>Your favorite color is <?=$c?> and your favorite animal is <?php echo "$a" ?></h1>


<?php if(isset($_SESSION['pictureUrl'])) { ?>
        <h3>Again, just for kicks...from a form.</h3>
        <?=$_SESSION['pictureUrl'] ?>
<?php } ?>