<?php

$name = "Giraffe Academy";

// .	Concatenation
// .=	Concatenation assignment


//  echo with a new line "\n"
echo nl2br("Seegatesite.com \nsharing and learning programming");


//	String functions

strtolower($name);
strtoupper($name);

strlen($name);
str_word_count();

str_replace("Academy", "College", $name);

substr($name, 8, 6);

// strpos(string, find, start) Find the position of the first occurrence of "php" inside the string:
// string Required. Specifies the string to search
// find	Required. Specifies the string to find
// start Optional. Specifies where to begin the search. If start is a negative number, it counts from the end of the string.
strpos($name, "College");

// Finds the position of the last occurrence of a string inside another string (case-sensitive)
strrpos();

// Finds the position of the first occurrence of a string inside another string (case-insensitive)
stripos();

// Finds the position of the last occurrence of a string inside another string (case-insensitive)
strripos();


strrev()

?>
