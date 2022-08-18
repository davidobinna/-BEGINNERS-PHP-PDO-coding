<?php
require 'config.php';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
       $pdo = new PDO($dsn,$user,$password);
       $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
       if ($pdo) {
           echo "Connected to the $db database successfully!";
       }
} catch (PDOExecption $e) {
    echo $e->getMessage()." unable to connect";
}

 ?>
