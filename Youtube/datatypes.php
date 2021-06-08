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
// Object
// Callable
// Iterable

#2 Special Types
// Resource
// Null