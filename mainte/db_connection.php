<?php
    const DB_HOST = 'mysql:dbname=udemy_php;host=127.0.0.1;charset=utf8';
    const DB_USER = 'php_user';
    const DB_PASSWORD = 'password123';


    try{
        $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]);
        echo 'ok';
    }catch(PDOException $e){
        echo $e->getMessage() . "\n";
        exit();
    }