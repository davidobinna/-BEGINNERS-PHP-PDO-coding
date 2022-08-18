<?php

$pdo = require_once './connect.php';

$publisher = [
            'publisher_id' => 5,
            'name' => 'Jeff bezoz'];

$sql = 'UPDATE publishers
        SET name = :name
        WHERE publisher_id = :publisher_id';
    //
$statement = $pdo->prepare($sql);
//
$statement->bindParam(':publisher_id',$publisher['publisher_id'],PDO::PARAM_INT);
$statement->bindParam(':name',$publisher['name']);
//
if ($statement->execute()) {
   echo 'The publisher has been updated sucessfully! : updated row is : '.$statement->rowCount();
} else {
  echo "Opps! something went wrong. ";
}

 ?>
