<?php

echo 'Tache 1'.'<br>';

$array = array("a", "b", "c", "b", "a");
print_r(array_count_values($array));

echo '<br>'.'Tache 2'.'<br>';

$array = [
  'a'=>1, 
  'b'=>2, 
  'c'=>3
];

 print_r(array_flip($array));

 echo '<br>'.'Tache 3'.'<br>';

 $array = array(1, 2, 3, 4, 5, 6);

 print_r(array_reverse($array));

 echo '<br>'.'Tache 4'.'<br>';

 $array = ['a', 'b', 'c'];
 $array2 = [1, 2, 3];

 print_r(array_combine($array, $array2));

 echo '<br>'.'Tache 6'.'<br>';

 $array = ['a', 'b', 'c', 'd', 'e'];

 for ($i = 0; $i < count($array); $i++) {
  $array[$i] = strtoupper($array[$i]);
 }

 print_r($array);

 echo '<br>'.'Tache 8'.'<br>';

 $array = [1, 2, 3, 4, 5];

 print_r(array_product($array));

echo '<br>'.'Tache 16'.'<br>';

$array = [1, 2, 3, 4, 5, 6, 7, 8];

for ($i = 0; $i < count($array)+2; $i++) {
  echo array_shift($array);
  echo array_pop($array);
 }

 echo '<br>'.'Tache 19'.'<br>';

$array = [1, 2, 3, 4, 5];

$arr = array_slice($array, 1, 3);


print_r($arr);
?>