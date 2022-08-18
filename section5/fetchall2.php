<?php

$pdo = require_once 'connect.php';

$sql = 'SELECT publisher_id, name FROM publishers WHERE publisher_id >= :publisher_id';

//
$statement = $pdo->prepare($sql);
//
$statement->execute([':publisher_id' => 8]);
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);
//
foreach ($publishers as $publisher) {
   echo $publisher['publisher_id'].". ".$publisher['name'].'<br />';
}

 ?>
