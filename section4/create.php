<?php

$pdo = require_once './connect.php';

$names = [
  'Penguin/Random House',
  'Hachettes Book Group',
  'Harper Collins',
  'Simones and Schuster'
];

$sql = 'INSERT INTO books(title) VALUES(:name)';
$statement = $pdo->prepare($sql);

foreach ($names as $value) {
    $statement->execute([":name"=> $value]);
}
$last_id = $pdo->lastInsertId();
echo "The books last inserted id ".$last_id." was inserted";
 ?>
