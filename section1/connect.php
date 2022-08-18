<?php
require 'config.php';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
       $pdo = new PDO($dsn,$user,$password);
       if ($pdo) {
           echo "Connected to the $db database successfully!";
       }
} catch (PDOExecption $e) {
    echo $e->getMessage()." unable to connect";
}

 ?>
