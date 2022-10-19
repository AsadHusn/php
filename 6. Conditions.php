<?php

$t = date("H");

if ($t < "10") {
  echo "Good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Good night!";
}

echo "<br> $t";

// --------------------

//	Conditional Assignment Operators
$user = [];

// ?:	Ternary operator
$status = (empty($user)) ? "anonymous" : "logged in";

/* ??	Null coalescing
The value will be expr1, if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value will be expr2. */
$status = $user[0] ?? "2nd value because 1st isn't exist";

?>

