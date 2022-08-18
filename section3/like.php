<?php
$pdo = require './connect.php';

function find_book_by_title(\PDO $pdo, string $keyword):array
{
    $pattern = '%'.$keyword.'%';

    $sql = 'SELECT book_id, title FROM books WHERE title LIKE :pattern';

    $statement = $pdo->prepare($sql);
    $statement->execute([':pattern'=>$pattern]);

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

//
$books = find_book_by_title($pdo,'es');

foreach ($books as $value) {
     echo $value['title'].'<br />';
}
 ?>
