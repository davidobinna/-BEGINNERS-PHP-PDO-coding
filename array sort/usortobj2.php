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

class Personcompare
{
   public static function compare(Person $x, Person $y)
   {
     return $x->age <=> $y->age;
   }
}

$group = [
  new Person('Peter', 30),
  new Person('Bob', 20),
  new Person('Alex', 25),
];

usort($group,['Personcompare','compare']);

print_r($group); ?>
