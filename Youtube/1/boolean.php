<?php

// Booleans
// integers and floats (0 or -0) will default to false 
// Call a Boolean with function
is_bool($isComplete);
// take it a step further
var_dump(is_bool($isComplete));
$isComplete = true; //true
$isComplete = 'false'; //true
$isComplete = 5; //true
$isComplete = 0; //false
$isComplete = []; //false
$isComplete = [2,3,6.7]; //true

// Boolean call back as 1 is true / 0 is false, this is string casting
var_dump($isComplete);
// change to string for different results
$isComplete = (string) false;

if ($isComplete) {
    //do something
    echo 'success';
} else {
    //do something else
    echo 'fail';
};