<?php

$s = "world";

//  single quotes cannot fetch variable value
echo '$s';

print("Hello");     // (single argument)

//  parse and print in string format
print_r([1,2,3]);   // (single argument)

//  formated string
printf("%s world", "Hi");

//  parse and print in string format
var_export([1,2,3]);

//  print html tags
echo htmlspecialchars("<h1>");