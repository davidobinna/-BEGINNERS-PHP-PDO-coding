<?php

$pdo = require_once './connect.php';

$names = [
  'lord Of Rings',
  'The Hunts Man',
  'Pirate of the caribean',
  'The seven seas'
];

$sql = 'INSERT INTO books(title) VALUES(:name)';
$statement = $pdo->prepare($sql);

foreach ($names as $value) {
    $statement->execute([":name"=> $value]);
}
$last_id = $pdo->lastInsertId();
echo "The books last inserted id ".$last_id." was inserted";
 ?>
