<?php 
//  Checking to see if a data type is a int
is_int($x);
var_dump(is_int($x));

// Integers - Base 10
$x = 5; //5
// Hexadecimal
$x = 0x2A; //42
// Octal
$x = 055; //45
//Binary
$x = 0b110 // 6
// New Syntax (Doesn't work with string even with casting)
$x = 200_000_000; //200,000,000

// Overflow
$x = PHP_INT_MAX; //9223372036854775807
var_dump($x); //integer
$x = PHP_INT_MAX + 1; //9.2233720368548E+18
var_dump($x); //float

// Casting
$x = (int) PHP_INT_MAX + 1; //9.2233720368548E+18
$x = (integer) PHP_INT_MAX + 1; //9.2233720368548E+18

// Data Types in integers
$x = (int) true; //1
$x = (int) false; //0
$x = (int) 5.98; //6 (rounds)
$x = (int) '5.9'; //5
$x = (int) '87'; //87
$x = (int) '87awada'; //87
$x = (int) null; //0


// FLOATS - Never compare floats directly
$x = 13.5e3; //13,500 float
$x = 13.5e-3; //0.0135 float
$x = 13_000.5e3 //float 13000.5
echo PHP_FLOAT_MAX;
echo PHP_FLOAT_MIN;
// Floor rounds all the numbers down , wiping the 7.0000
$x = floor ((0.1 + 0.7) * 10); // You would think this would return 8, but you get 7
// Ceiling rounds everything up
$x = ceil((0.1 + 0.2) * 10); //4
// Infinity
$x PHP_FLOAT_MAX * 2; //INF
// Check to see if a Float is infinity
var_dump(is_infinite($x)); //bool(true) float(INF)
var_dump(is_finite($x)); //bool(false) float(INF)
// NAN + Means NOT A NUMBER
var_dump(is_nan($x)); // bool(true) int(5);
var_dump(is_nan(log(-1))); //bool(tue) float(INF);
// Casting
var_dump((float)($x));
var_dump(floatval($x));
// Converting a string to a float will result in 0 unless the string is a number

