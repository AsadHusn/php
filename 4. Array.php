<?php
/*
Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays
*/

$arr = Array("tom", "hanks");
$arr[10] = "Asad";

foreach($arr as $a){
	echo "$a  ";
}

// Length of the Array
count($arr);

// -------------------
echo "<h5>Operators</h5>";
//	Array Operators

// +	Union
$a = array("a" => "red", "b" => "green");  
$b = array("c" => "blue", "d" => "yellow");
$c = $a+$b;
print_r($c);

// ==	equality
var_dump($a == $b);
// !=	Inequality
// <>	Inequality

// ===	Identity
// Returns true if $x and $y have the same key/value pairs in the same order and of the same types
var_dump($a === $b);
// !==	Non-identity

// --------------------

//	Conditional Assignment Operators

// ?:	Ternary
$status = (empty($user)) ? "anonymous" : "logged in";

/* ??	Null coalescing
The value will be expr1, if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value will be expr2. */
$user = $_GET["user"] ?? "2nd value because 1st isn't exist";

// --------------------
echo "<h4> Multidimentional Array </h4>";

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