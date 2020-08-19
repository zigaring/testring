<?php

    $user = 'root';
    $pass = '';
    $server = 'localhost';
    $db = 'vaja';
    $charset = 'utf8mb4';
    
    $dsn = "mysql:host=$server;dbname=$db;charset=$charset";
    
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    
    $pdo = new PDO($dsn, $user, $pass, $opt);
    
    $salt = "1234567890987654321";
    
?>