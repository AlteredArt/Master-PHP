<?php

// NULL
// If you don't know the value of a variable you could assign the variable to null and later reassign the value
// When Null gets cast to a string it will revert to an empty string
$x = null;
var_dump((string) $x); //string(0)""
var_dump((int) $x); //int(0)
var_dump((bool) $x); //bool(false)
var_dump((array) $x); //array(0){}


// A variable is also null if it is yet to be defined
// A variable can be null if you explicitly unset it
$x = 123;
var_dump($x);
unset($x);
var_dump($x);
// Null Constant
$a = NULL;
$a = null; //*nothing\
// Check to see if a variable is null
// var dump
var_dump($a); //Null
// function
var_dump(is_null($a)); // bool(true)
// comparison
var_dump($a === null);

