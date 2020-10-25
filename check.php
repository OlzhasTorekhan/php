<?php
    $name = filter_var(trim($_POST['name']), 
    FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']), 
    FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), 
    FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), 
    FILTER_SANITIZE_STRING);    
    $phone_number = filter_var(trim($_POST['phone_number']), 
    FILTER_SANITIZE_STRING);
    $city = filter_var(trim($_POST['city']), 
    FILTER_SANITIZE_STRING);
    $branch = filter_var(trim($_POST['branch']), 
    FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', 'root', 'practice');
    $mysql -> query("INSERT INTO `users` (`name`,` `surname`, `email`, `password`, `phone_number`, `city`, `branch`,`active`)
    VALUES('$name', '$surname', '$email', '$password', '$phone_number', '$city', '$branch', 'n')");
    echo 'Hello, world!';
    $mysql->close();
?>