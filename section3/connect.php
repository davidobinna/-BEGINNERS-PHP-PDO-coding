<?php
require '../section2/config.php';

function connect($host,$db,$user,$password){

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
      $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
       return new PDO($dsn,$user,$password,$option);

} catch (\PDOExecption $e) {
       echo $e->getMessage();
 }

}
  return connect($host,$db,$user,$password);


 ?>
