<?php

$pdo = require 'connect.php';

$sql = 'SELECT name,book_id,title
        FROM publishers, books
        WHERE books.publisher_id = publishers.publisher_id';

$statement = $pdo->query($sql);

$publishers = $statement->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);
print_r($publishers);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>books</title>
   </head>
   <body>
 <label for="books"> Select a book:</label>
 <select name="book" id="book" >
     <?php foreach ($publishers as $publisher => $books) : ?>
     <optgroup label="<?php echo $publisher ?>">
        <?php foreach ($books as $book) : ?>
         <option value="<?php echo $book['book_id'] ?>"><?php echo $book['title']?></option>
       <?php endforeach ?>
     </optgroup>
    <?php endforeach ?>
 </select>
</body>
</html>
