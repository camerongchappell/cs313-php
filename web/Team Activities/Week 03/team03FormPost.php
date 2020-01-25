<?php
    // retrieve Post data
    $name = htmlspecialchars($_POST["nameForPHP"]);
    $email = htmlspecialchars($_POST["emailForPHP"]);
    $password = htmlspecialchars($_POST["passwordForPHP"]); // this is called santizing and keeps you from being hacked
    $major = htmlspecialChars($_POST["major"]);
    $comments = htmlspecialChars($_POST["comments"]);
    
    // do something with the data
    echo "Your name is $name, your email is $email, and your password is $password.  Your major is $major.<br>";
    echo "Your comments: $comments.<br>";
    echo "The countries you have visited are:<br>";
    if(!empty($_POST["country"])) {
        foreach($_POST["country"] as $country) {
            echo "$country<br>"; // the instructor's solution shows how to sanitize this as well
        }
    }
?>