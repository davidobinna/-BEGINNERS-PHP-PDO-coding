<?php
$pdo = require 'connect.php';


$sql = 'SELECT publisher_id, name FROM publishers';

$statement = $pdo->query($sql);
$publishers = $statement->fetchAll(PDO::FETCH_KEY_PAIR);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Publishers</title>
  </head>
  <body>
<label for="publisher">Select a Publisher</label>
<select name="publisher" id="publisher">
   <?php foreach ($publishers as $publishers_id => $name):?>
     <option value="<?php echo $publishers_id ?>"> <?php echo $name ?></option>
   <?php endforeach ?>
</select>
  </body>
</html>
