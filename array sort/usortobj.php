<?php
header('Content-Type: text/plain');

class Person
{
   public $name ;
   public $age ;

   public function __construct(string $name, int $age)
   {
      $this->name = $name;
      $this->age = $age;
   }
}


$group = [
  new Person('Bob', 20),
  new Person('Alex', 25),
  new Person('Peter', 30),
];

usort($group, fn($x,$y) => $x->age <=> $y->age);

print_r($group);
 ?>
