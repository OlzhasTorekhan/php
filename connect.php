<?php

$connection = mysqli_connect('localhost', 'root', 'root');

$select_db = mysqli_select_db( $connection,  'practice');


    setcookie('checkbox', 'password', time() + 20, '/');


?>