<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
	return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown

// ------------------

// Return Type Declarations
function addNumbers(float $a, float $b) : float {
	return $a + $b;
}
echo addNumbers(1.2, 5.2);
// You can specify a different return type, than the argument types, but make sure the return is the correct type:


?>