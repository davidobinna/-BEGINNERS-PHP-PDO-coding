<?php
header('Content-Type: text/plain');
$number = ['Alexxx','peter', 'john'];

usort($number, function($x ,$y){
   if (strlen($x) === strlen($y)) {
       return 0;
   }
   return strlen($x) < strlen($y) ? -1 : 1;
});
print_r($number);

// using arrow function

$number = ['Alexxx','peter', 'john'];

usort($number, fn($x ,$y) => strlen($x) <=> strlen($y));

 ?>
