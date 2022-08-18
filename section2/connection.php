<?php
require 'config.php';


class Connection
{
  public static $check = " database class ";

  public static function make($host,$db,$user,$password)
  {

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    try {
          $option = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

          return new PDO($dsn,$user,$password,$option);
    } catch (\PDOExecption $e) {
           echo $e->getMessage();
     }
  }
}


return Connection::make($host,$db,$user,$password);
 ?>
