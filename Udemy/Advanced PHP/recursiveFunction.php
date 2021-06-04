<!-- Simple recursive function -->
<!-- Great for tree hierarchy retrieval -->
<!-- A function that calls itself -->
<?php

$i = 0;

while($i < 3) {
    echo 'ha';
    $i++;
}

// define the base condition first
function hahaRecursive($i) {
    if ($i === 3) {
        return;
    }
    return 'ha' . hahaRecursive(++$i);
}

echo hahaRecursive(0);


// Recursive Factorial Example
function factorial($n) {
    if ($n === 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

echo factorial(5);

