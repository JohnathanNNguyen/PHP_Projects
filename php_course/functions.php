<?php

// Functions

function simpleFunction()
{
    echo "Hello World";
}

// simpleFunction();

// Function with parameter
function sayHello($name = "World"){
    echo "Hello $name<br>";
}

// sayHello("Joe");
// sayHello();

// Return Value
function addNumbers($num1, $num2){
  return $num1 + $num2;
};

// echo addNumbers(2,3);

// By Reference

$myNum = 10;

function addFive($num){
 $num += 5;
};

function addTen(&$num){
$num += 10;
};

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);
echo "Value: $myNum<br>";
