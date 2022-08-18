<?php

function get_book_list(\PDO $pdo, array $list):array
{
   $placeholder = str_repeat('?,',count($list)-1).'?';
   $sql = "SELECT book_id,title
           FROM books
           WHERE book_id IN ($placeholder)";
   $statement = $pdo->prepare($sql);
   $statement->execute($list);
   return $statement->fetchAll(PDO::FETCH_ASSOC);
}

$pdo = require './connect.php';
//
$books = get_book_list($pdo, [1,2,3]);

var_dump($books);
 ?>
