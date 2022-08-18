<?php


$statement = [
  'USE bookdb;',
'CREATE TABLE authors(
author_id INT AUTO_INCREMENT,
first_name VARCHAR(100) NOT NULL,
middle_name VARCHAR(50) NULL,
last_name  VARCHAR(100) NULL,
PRIMARY KEY(author_id)
);',
' CREATE TABLE book_authors(
  book_id INT NOT NULL,
  author_id INT NULL,
  PRIMARY KEY(book_id, author_id),
  CONSTRAINT fk_book
      FOREIGN KEY(book_id)
      REFERENCES books(book_id)
      ON DELETE CASCADE,
      CONSTRAINT fk_author
          FOREIGN KEY(author_id)
          REFERENCES authors(author_id)
          ON DELETE CASCADE)'];

$pdo = require 'connect.php';

foreach ($statement as $statement) {
    $pdo->exec($statement);
}

 ?>
