<?php
    // retrieve Post data
    $email = htmlspecialchars($_POST["emailForPHP"]);
    $password = htmlspecialchars($_POST["passwordForPHP"]); // this is called santizing and keeps you from being hacked
    
    // do something with the data
    echo "Here is your email $email, and your password is $password";
?>