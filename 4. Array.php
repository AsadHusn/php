<?php
/*
Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays
*/

$arr = Array("tom", "hanks");
$arr[10] = "Asad";

//	print
foreach($arr as $a){
	echo "$a  ";
}

// Length
count($arr);

// -------------------

//	Array Operators

// +	Union (join two associative arrays)
$a = array("a" => "red", "b" => "green");  
$b = array("c" => "blue", "d" => "yellow");
$c = $a+$b;
print_r($c);

// ==	equality
var_dump($a == $b);
// != or <>	Inequality

// ===	Identity (identical)
// returns true if $x and $y have the same key/value pairs in the same order and of the same types
var_dump($a === $b);

// !==	Non-identity

// -----------------------

//	Multidimentional array
$cars = array (
	array("Volvo",22,18),
	array("BMW",15,13),
	array("Saab",5,2),
	array("Land Rover",17,15)
);

foreach($cars as $car){
	foreach($car as $c){
		echo "$c ";
	}
	echo "<br>";
}

?>