<?php

//
$pdo = require_once 'connect.php';
$sql = 'SELECT publisher_id, name FROM publishers';
//
$statement = $pdo->query($sql);
//

//
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);
//
foreach ($publishers as $publisher) {
     echo $publisher['name'].'<br />';
}


 ?>
