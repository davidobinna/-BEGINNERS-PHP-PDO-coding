<?php

$pdo = require 'connect.php';

$sql = 'SELECT name FROM publishers WHERE publisher_id = :publisher_id';
//
$statement = $pdo->prepare($sql);
//
$statement->execute(
  [':publisher_id' => 9]
);

$publisher_name = $statement->fetchColumn();
echo $publisher_name;

 ?>
