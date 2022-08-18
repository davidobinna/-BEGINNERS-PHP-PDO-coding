<?php
class Book
{

  public function __construct()
  { 
    if (isset($this->isbn)) {
       echo 'ISBN: '.$this->isbn;
    }
    echo "ISBN has not been assigned yet ";
  }
}

$pdo = require 'connect.php';

$sql = 'SELECT book_id, title, isbn, published_date FROM books
        WHERE book_id = :book_id';

$statement = $pdo->prepare($sql);
$statement->execute([':book_id' => 1]);
$statement->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'Book');
$book = $statement->fetch();

var_dump($book);
 ?>
