<?php
header('Content-Type: text/plain');

$tasks = [
  ['Learn PHP programmin',2],
  ['practice PHP', 2],
  ['work',8],
  ['Do exercise', 1],
];


//unset($tasks[2]);
usort($tasks, function ($a, $b){
     return $a[1] <=> $b[1];
});
print_r($tasks);
 ?>
