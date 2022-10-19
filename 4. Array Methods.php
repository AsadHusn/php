<?php

$a = [1, 2, 3, "asad", "ali"];

//  length
count($a);

//	Search: bool in_array(find, array)
in_array("ali", $a);

//  ----------------------------------

//  add to end of array
$a[] = 'ahmad';
array_push($a, "one", "two");
$del = array_pop($a);

//  add to start of array
array_unshift($a, "hello");
$del = array_shift($a);
//  remove a specific index
unset($a[1]);

//  ----------------------------------

//  make nested chunks of an array
$chunk = array_chunk($a, 3);

//  merge arrays
$arr = array_merge($a, ["a", "b", "c"]);
$arr2 = [...$a];   // spread operator

//  merge into associative array
$arr3 = array_combine(['name', 'age'], ['asad', 18]);

//  array keys
$keys = array_keys($arr3);

//  flip keys into values and vice versa
$flipped = array_flip($arr3);

//  ----------------------------------

//  array of range of numbers
$num = range(1, 20);

//  Perform a callback function on each item of array

//  array array_map(callback)
$numbers = array_map(function($n){
    return "Number $n";
}, $num);

//  array array_filter(array, callback)
$even = array_filter($num, fn($n) => $n%2==0);

//  number array_reduce(array, callback, initial)
$sum = array_reduce($num, fn($carry, $n)=> $carry+$n);


var_export($sum);

