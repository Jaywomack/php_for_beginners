<?php

// What is a variable

// variable types

/**
 * String 
 * Integer
 * Float
 * Boolean
 * Null
 * Array
 * Object
 * Resource
 */

 // Declare Variables
$name = 'Jay';
$age = 36;
$isMale = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';


// Print type of variable
echo getType($name).'<br>';
echo getType($age).'<br>';
echo getType($isMale).'<br>';
echo getType($height).'<br>';
echo getType($salary).'<br>';


// Print the whole variable
var_dump($name);
var_dump($age, $isMale);

// Change the value of a variable 
$name = 28;
echo getType($name);

// variable checking functions
is_string($name);
var_dump(is_int($name));
// Check if variable is defined
var_dump(isset($address));
echo $address;

// Constants
define('PI',3.14);
echo PI;

echo defined('PI').'<br>';


// Using PHP built in constants
echo PHP_INT_MAX;

?>