<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'ahmed');
    define('DB_PASS', '12345');
    define('DB_NAME', 'php_project');

    $connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($connection->connect_error) {
        die('Connection Failed ' . $connection->connect_error);
    }
?>