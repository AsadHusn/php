<?php

// no $ sign before the constant name
// Create a PHP Constant with define()
// define(name, value, case-insensitive (Default is false))
// constants are global

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// Constant Arrays
define("cars", [
	"Alfa Romeo",
	"BMW",
	"Toyota"
]);
echo cars[0];

?>