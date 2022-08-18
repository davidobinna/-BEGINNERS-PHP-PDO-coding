<?php

$publisher_id= 3;
//
$pdo = require_once 'connect.php';

$sql = 'DELETE FROM publishers WHERE publisher_id >= :publisher_id';

$statement = $pdo->prepare($sql);
$statement->bindParam(':publisher_id',$publisher_id,PDO::PARAM_INT);

if ($statement->execute()) {
     echo $statement->rowCount(). ' row(s) was deleted sucessfully ';
}
 ?>
