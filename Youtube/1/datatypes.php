<!-- PHP is a weak type language that means you don't have to clarify the type of your variable -->
<!-- This means the data type of the variable can change over time -->
<!-- Dynamic data type languages happen at run time, while static languages happen at compile time (Java, C++, C#) -->
<!-- Php even supports strict types. -->

<?php 

// Data Types & Type casting

// Scalar Type
// Boolean - true / false
$completed = true;
// Integers - whole numbers (1,2,3,0, -5)
$score = 75;
// Float - decimal numbers (1.5, 1.3, 0.7)
$price = 0.99;
// String - strings of letters
$greeting = "Hello Waffles";

echo $completed . '<br/>';
echo $score . '<br/>';
echo $price . '<br/>';
echo $greeting . '<br/>';

// Tell the of variable
echo gettype($score);
var_dump($completed);



// Compound Types
// Array
$companies = [1,2,3,0.5, -9.2, 'hello', true];
// echo $companies will fail because the compiler doesn't know how to turn an array into a string.
print_r($companies);

// Object
// Callable
// Iterable

#2 Special Types
// Resource
// Null

// Type Juggling or Type Coercion: Example of strict variables
// Type Hinting: EX: Sum 2 var and return the value
function sum(int $x, int $y) {
    $x = 5.5;
    var_dump($x + $y);
    echo '<br />';
    return $x + $y;
}
// Trying to add an integer to a string
$sum = sum(2,'3');
echo $sum . '<br />';
var_dump($sum);
// $x = 5.5


// Strict Mode
declare(strict_types=1);

function sum(float $x, int $y) {
    return $x + $y;
}
$sum = sum(2.5,3);
echo $sum . '<br />';
var_dump($sum);
// $x = 5.5


// Type Casting
$t = (int) '5';
var_dump($t);
