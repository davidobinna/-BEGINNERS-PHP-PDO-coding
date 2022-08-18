<?php
namespace phptutorial;

class Publisher
{
   private $publisher_id ;
   private $name;
}

//
$pdo = require 'connect.php';
//
$sql = 'SELECT publisher_id,name FROM publishers WHERE publisher_id = :publisher_id';
//
$statement = $pdo->prepare($sql);
//
$statement->execute([':publisher_id' => 8]);
//
$publisher = $statement->fetchObject('phptutorial\Publisher');
//
var_dump($publisher);
//

 ?>
