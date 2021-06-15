<?php
// Declaring numbers

// $a = 5;
// $b = 4;
// $c = 1.2;

// Arithmetic Operations
// echo $a + $b . '<br>';
// echo $a - $b . '<br>';
// echo $a * $b . '<br>';
// echo $a / $b . '<br>';
// echo $a % $b . '<br>';

// // Assignment with math operators
// $a +=$b; echo $a.'<br>';

// Increment Operator
// $a++;
// echo ++$a;

// // Number checking functions
// var_dump(is_float(3));
// var_dump(is_integer(3.0));
// var_dump(is_numeric('asdf'));

// Conversion
// $strNumber = '12.00';
// $number = (int)$strNumber;
// var_dump($number);

// Number functions
echo "abs(-15)" .  abs(-15) . '<br>';
echo "pow(2,3)" . pow(2,3) . '<br>';
echo "sqrt(16)" . sqrt(16) . '<br>';
echo "max(2, 3)" . max(2,3) . '<br>';
echo "min(2,3)" . min(2,3) . '<br>';
echo "round(2.4)" . round(2.4) . '<br>';
echo "round(2.6)" . round(2.6) . '<br>';
echo "floor(2.6)"  . floor(2.6) . '<br>';
echo "ceil(2.4)" . ceil(2.4) . '<br>';

// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 4, '.', ',')



?>