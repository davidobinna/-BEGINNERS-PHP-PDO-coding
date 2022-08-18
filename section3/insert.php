<?php
$pdo = require './connect.php';
//
$sql = 'INSERT INTO publishers(name) VALUES(:name)';
$name = 'Davido king';

$statement = $pdo->prepare($sql);
$statement->execute([':name'=>$name]);

$publisher_id = $pdo->lastInsertId();

echo "The publisher id ".$publisher_id." was inserted";
 ?>
