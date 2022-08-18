<?php
header('Content-Type: text/plain');

 class Books
 {

  }
    $pdo = require 'connect.php';

    $sql = 'SELECT book_id, title, isbn, published_date
            FROM books
            WHERE book_id = :book_id';

 $statement = $pdo->prepare($sql);

 $statement->execute([':book_id'=> 1]);
 $statement->setFetchMode(PDO::FETCH_CLASS,'Books');
 $book = $statement->fetch();

 var_dump($book);

 ?>
