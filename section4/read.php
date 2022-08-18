<?php
$pdo = require 'connect.php';

$sql = 'SELECT publisher_id, name FROM publishers';

$statement = $pdo->query($sql);
//
$publishers = $statement->fetchAll(PDO::FETCH_ASSOC);
//
if ($publishers) {
  //
   foreach ($publishers as $publisher) {
     // code...
        echo $publisher['name'].'<br/>';
   }
}

 ?>
