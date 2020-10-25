<?php
require "libs/rb-mysql.php";

// Подключаем библиотеку RedBeanPHP
require "../libs/rb-mysql.php";

// Подключаемся к БД
R::setup( 'mysql:host=localhost;dbname=practice',
        'root', 'root', 3306);

// Проверка подключения к БД
if(!R::testConnection()) die('No DB connection!');

session_start(); // Создаем сессию для авторизации
?>
