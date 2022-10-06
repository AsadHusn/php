<?php

// int
$n = 2;
// float
$n = 2.5;

// Number functions
abs(-100);
pow(2, 4);
sqrt(144);
max(2, 5);
min(2, 5);
round(3.2);
ceil(3.2);
floor(3.9);
pi();
rand();
rand(10, 100);

// ------------------

//	Predefined Constants Limits
PHP_INT_MAX;
PHP_INT_MIN;
PHP_INT_SIZE;

PHP_FLOAT_MAX;
PHP_FLOAT_MIN;
// The smallest representable negative floating point number
- PHP_FLOAT_MAX;
// Number of decimal digits that can be rounded into a float and back without precision loss
PHP_FLOAT_DIG;
//	The smallest representable positive number x, so that x + 1.0 != 1.0
PHP_FLOAT_EPSILON;

// ------------------

// Check Type
var_dump(is_int($n));
is_integer($n);
is_long($n);

is_float($n);
is_double($n);

// A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
is_finite($n);
is_infinite($n);

is_nan($n);

is_numeric($n);

// ------------------

// Casting Strings and Floats to Integers
(int)
(integer)
intval($n);




?>