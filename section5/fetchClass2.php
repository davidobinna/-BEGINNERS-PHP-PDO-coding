<?php
header('Content-Type: text/plain');

class Book
{
  private $book_id ;

  private $title ;

  private $isbn ;

  private $published_date;

  public function __set($name,$value)
  {
  }
}

$pdo = require 'connect.php';

$sql = 'SELECT book_id, title, isbn ,published_date, publisher_id
        FROM books WHERE book_id = :book_id';

$statement = $pdo->prepare($sql);
$statement->execute([':book_id'=> 1]);
$statement->setFetchMode(PDO::FETCH_CLASS,'Book');

$book = $statement->fetch();
var_dump($book);
 ?>
