<?php
require 'function.php';

$pdo = require 'connect.php';

$book = [
         'title' => 'Eternal',
         'isbn'  => '9978354676',
         'published_date' => '2021-03-23',
         'publisher_id' => 2
       ];

$author = [
          'first_name' => 'Lisa',
          'last_name' => 'Scottline'
];


try {
     $pdo->beginTransaction();
     //
     $author_id = get_author_id($pdo, $author['first_name'],$author['last_name']);

     if (!$author_id) {
          $author_id = insert_author($pdo,
          $author['first_name'],$author['last_name']);
          echo "a new author with ID ".$author_id." has been created."."<br>";
     }

    $book_id = insert_book(
      $pdo,
      $book['title'],
      $book['isbn'],
      $book['published_date'],
      $book['publisher_id']
    );
   insert_book_author($pdo, $book_id, $author_id);
     $pdo->commit();
} catch (\Exception $e) {
      $pdo->rollBack();

      die($e->getMessage());
}

 ?>
