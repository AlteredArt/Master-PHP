<?php
echo $name{1}; //Curly brackets were depreciated in PHP 7.4;

// STRINGS
// within single quotes you cannot use variables
$firstName =  'WIll';
$lastName = "Smith";
$lastName = "$firstName Smith"; //Will Smith
$lastName = "{$firstName} Smith"; //Will Smith
$lastName = "${firstName} Smith"; //Will Smith
// Accessing a letter in a string (grab the 1 index)
$name = $firstName . '' . $lastName;
echo $name . '<br />';
echo $name[1];
echo $name[-2];
// Change a letter
$name[-2] = 'I';
var_dump($name); // string(10) "Will Smith"

// Heredoc - Treats a string as if it were in double quotes
$x = 1;
$y = 2;
$text = <<<TEXT
example $x
example $y
example
TEXT;
echo nl2br($text);

// Nowdoc - Treats a string as if were in single quotes (Variables will no longer be printed)
$other = <<<'TEXT'
example 1
example 2
example 3
TEXT;



