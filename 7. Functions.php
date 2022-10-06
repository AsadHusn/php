<?php
/*
The real power of PHP comes from its functions.
PHP has more than 1000 built-in functions.
Function names are NOT case-sensitive.
*/

// Default Parameter
function myName($str = "Asad"){
	echo $str;
}

// ----------------

// Passing Arguments by Reference
function add_five(&$value) {
	$value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;

// ----------------




?>