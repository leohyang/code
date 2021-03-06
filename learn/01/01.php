<?php

// This is a comment

/*
   This is a comment
   on multiple lines
*/

// VARIABLES
//
// A variable is a symbol that represents a quantity that may vary.
//
// $identifier = value;

$age = 25;     // The value 25 is assigned to variable age



// BASIC DATA TYPES
$age = 25;                               // Integer
$temperature = -3.82;                    // Real number
$name = 'Nacho López';                   // String
$has_car = true;                         // Boolean (only two values: true or false)



// ARITHMETIC OPERATIONS
$x = 5;
$y = 2;
$z = 0;

$z = $x + $y;    // Addition.                                     Result: 7.
$z = $x - $y;    // Subtraction.                                  Result: 3.
$z = $x * $y;    // Multiplication.                               Result: 10.
$z = $x / $y;    // Division.                                     Result: 2.5.
$z = $x % $y;    // Modulo (remainder of the integer division).   Result: 1.

$z++;            // Increase the value of z by 1.                 Result: 2.
$z--;            // Decrease the value of z by 1.                 Result: 1.

$z = 50 - $x * 6 / -0.5;      //
$z = (50 - $x) * 6 / -0.5;    // The order of operations is as in mathematics
$z = (50 - $x * 6) / -0.5;    //

$z = 2 * $z + 3;              // The symbol = assigns a value to the variable



// PRINT VARIABLES ON SCREEN

echo 'Hello, world!<br />';             // Prints on screen: Hello, world!
echo $x . '<br />';                     // Prints the variable x

// You can print on screen strings and variables
echo 'I have bought ' . $x . ' oranges and ' . $y . ' lemons.<br />';



// DATA TYPE CONVERSION

$height = '95.4';
echo gettype($height) . '<br />';           // Prints the current data type
$height = (float) $height;                  // Convert a string to a real number
echo gettype($height) . '<br />';

$altitude = -544.432;
echo gettype($altitude) . '<br />';
$altitude = (string) $altitude;             // Convert a real number to string
echo gettype($altitude) . '<br />';

?>
