<?php
    // retrieve Post data
    $name = htmlspecialchars($_POST["nameForPHP"]);
    $email = htmlspecialchars($_POST["emailForPHP"]);
    $password = htmlspecialchars($_POST["passwordForPHP"]); // this is called santizing and keeps you from being hacked
    $major = htmlspecialChars($_POST["major"]);
    $comments = htmlspecialChars($_POST["comments"]);
   // $country = htmlspecialChars($_POST["country"]);
    
    // do something with the data
    echo "Your name is $name, your email is $email, and your password is $password.  Your major is $major.<br>";
    echo "Your comments: $comments.<br>";
    if(!empty($_POST["country"])) {
        foreach($_POST["country"] as $country) {
            echo $country;
        }
    }
?>