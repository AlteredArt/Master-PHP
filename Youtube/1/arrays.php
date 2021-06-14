<?php

// ARRAY
// Use single quotes unless you need a variable then use double
// Unlike strings you can't use negative numbers to access the end of the array
// One way to assign an array
$programmingLanguages = ['PHP', 'Java', 'Python'];
// Another
$programmingLanguages = array('PHP', 'Java', 'Python');
// Accessing elements
echo $programmingLanguages[1];
// Check by index
var_dump(isset($programmingLanguages[1])); //bool(true)
// Change Index
$programmingLanguages[1] = 'C++';
echo $programmingLanguages[1]; //C++
// See contents or array
var_dump($programmingLanguages); //Also prints the type
// Cleaner way
echo '<pre>';
print_r($programmingLanguages); //More Clean
echo '</pre>';
// Get length of array
echo count($programmingLanguages); //3
// Pushing
$programmingLanguages[] = 'C==';
// Array Push
array_push($programmingLanguages, 'love', 'C', 'Go');
// Keys are strings or integers

// Associated array
// Named keys in an array are referred too, associative array
$newLanguages = [
    'php' => [
        'creator' => 'Waffles',
        'maker' => 'Chloe',
        'versions' => [
            ['version' => 3.9, 'releaseDate' => 'Oct 5, 2020'];
        ]
    ],
    'python' => '3.9'
];

$addedLanguage = 'Android';
$newLanguages[$addedLanguage] = '1.15';

echo $newLanguage['php']['creator'][0][releaseDate];

echo '<pre>';
print_r($newLanguages);
echo '</pre>';
