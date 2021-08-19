<?php
$name = "Johnathan";
$age = 31;
$isMale = true;
$height = 5.9;
$salary = null;

// print variable
echo $name . "<br>";
echo $age . "<br>";
echo $isMale . "<br>";
echo $height . "<br>";
echo $salary . "<br>";

// print types
echo gettype($name) . "<br>";
echo gettype($age) . "<br>";
echo gettype($isMale) . "<br>";
echo gettype($height) . "<br>";
echo gettype($salary) . "<br>";
// Print whole variable
var_dump($name, $age, $isMale, $salary, $height);

// change the value of a variable
$name = false;

// Print type of the variable
echo gettype($name) . "<br>";

// Variable checking functions
is_string($name); //false
is_int($age);
is_bool($isMale);
is_double($height);
// check if variable is defines
isset($name);
isset($address);

// Constants
define("PI", 3.14);
echo PI . "<br>";

// Using PHP built-in constants
echo SORT_ASC . "<br>";
echo PHP_INT_MAX . "<br>";

?>
