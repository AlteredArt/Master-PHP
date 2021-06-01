<!-- This tag is best used for only a single line of code -->
<?=
// Php is a server side language and only shows the compiled mock up
// Echo along with single or double quotes is used to print something to the screen.
// Print returns a value, and can be used inside expressions.
// echo print 'Hello World' :returns Hello World 1
// print echo 'hello world'; will not work
// echo('another way to call echo');
// echo 'Hello', '', 'World';
// Names are case sensitive in PHP, Convention is capital names.

// Flow Convention
$x = 12;
$y = $x;
$x = 3;
echo $y;
// If you want dynamic variables you must set variables by reference instead of value.
// add ampersand to the dynamic variable
// $y = &$x;

// Variables
$_123name= 'Example';
$firstName = "Waffles";
$lastName = "Matta";
echo $firstName;

// Encapsulation ("Need double quotes")
// can use curly braces as well
echo 'Hello' . $firstName;
echo "Hello {$lastName}";

// Variable Example
$a = 10;
$b = 5;

echo $x . ',' . $y;


// Constants
// constants cannot be remapped
// Call the variable to see if it has been declared.
// define('name', 'value', 'true or false for case sensitive');
define('STATUS_PAID', 'paid');
echo $STATUS_PAID;

