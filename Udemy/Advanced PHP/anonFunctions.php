<!-- Anonymous Functions are also known as Lambda -->
<!-- Two ways to call an anon function: 1) Use a Variable 2) Pass it into another function -->

<!-- Variable Calling -->
<?php
$hello = function () {
    echo "Hello anon variable";
}

// Inside another function
function printMessage($function) {
    $function();
}

printMessage(function () {
    echo "Hello anon variable";
})

// Closure

$counter = 0;
$closure = function () use ($counter) {
    return ++$counter;
};

echo $closure();