<?php

$pdo = require_once 'connect.php';
//
$sql = 'SELECT book_id, title FROM books';
$statement = $pdo->query($sql);
//
while (($row = $statement->fetch(PDO::FETCH_ASSOC))!== false) {
    echo $row['title'].'<br/>';
};

 ?>
