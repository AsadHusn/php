<?php

$name = "Giraffe Academy";

// .	Concatenation
// .=	Concatenation assignment


//  echo with a new line "\n"
echo nl2br("Seegatesite.com \nsharing and learning programming");


//	String functions

strtolower($name);
strtoupper($name);
//  uppercase first letter of each word
ucwords($name);

strlen($name);
str_word_count($name);

str_replace("Academy", "College", $name);

substr($name, 8, 6);

// strpos(string, find, start) Find the position of the first occurrence of "php" inside the string:
// string Required. Specifies the string to search
// find	Required. Specifies the string to find
// start Optional. Specifies where to begin the search. If start is a negative number, it counts from the end of the string.
strpos($name, "College");

// Finds the position of the last occurrence of a string inside another string (case-sensitive)
strrpos($name, "College");

// Finds the position of the first occurrence of a string inside another string (case-insensitive)
stripos($name, "college");

// Finds the position of the last occurrence of a string inside another string (case-insensitive)
strripos($name, "college");

// reverse a string
strrev($name);

// convert to string
var_export($name);

str_starts_with($name, "Academy");
str_ends_with($name, "ege");

//  parse html to the page
htmlspecialchars($name);

//  string separator
explode(".", $name);


?>
