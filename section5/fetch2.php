<?php
//
$pdo = require_once 'connect.php';
//
$sql = 'SELECT book_id, title FROM
        books WHERE publisher_id = :publisher_id ' ;
//
$statement = $pdo->prepare($sql);
//
$statement->execute([':publisher_id' => 10]);
//
while (($row = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
   echo $row['title']. PHP_EOL ;
}
 ?>
