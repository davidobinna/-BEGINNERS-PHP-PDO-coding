<?php

$publisher_id = 1 ;

//
$pdo = require 'connect.php';

$sql = 'SELECT publisher_id, name FROM publishers
        WHERE publisher_id = :publisher_id';

$statement = $pdo->prepare($sql);
$statement->bindParam(':publisher_id',$publisher_id,PDO::PARAM_INT);
$statement->execute();
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($publishers) {
    foreach ($publishers as $publisher) {
      echo $publisher['publisher_id'].' : '.$publisher['name'];
     }
} else {
  echo "The publisher with $publisher_id was not found. ";
}
 ?>
