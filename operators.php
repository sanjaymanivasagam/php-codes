<?php
$a = 10;
$b = 5;
// Arithmetic Operators
echo "Arithmetic Operators:<br>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br><br>";
// Assignment Operators
echo "Assignment Operators:<br>";
$c = $a;
echo "c = a : " . $c . "<br>";
$c += $b;
echo "c += b : " . $c . "<br><br>";
// Comparison Operators
echo "Comparison Operators:<br>";
if($a == $b)
    echo "a is equal to b<br>";
else
    echo "a is not equal to b<br>";
if($a > $b)
    echo "a is greater than b<br><br>";
// Logical Operators
echo "Logical Operators:<br>";
if($a > 5 && $b < 10)
{
    echo "AND operator true<br>";
}
if($a > 5 || $b > 10)
{
    echo "OR operator true<br>";
}
echo "NOT Operator:<br>";
if(!($a < 5))
{
    echo "Condition is reversed, a is not less than 5<br>";
}
//XOR Operator
echo "XOR Operator:<br>";
if($a > 5 xor $b > 10)
{
echo "Only one condition is true <br><br>";
}
// Increment and Decrement Operators
echo "Increment / Decrement Operators:<br>";

++$a;
echo "before increment a = " . $a . "<br>";
$a++;
echo "After increment a = " . $a . "<br>";
--$b;
echo "before decrement b = " . $b . "<br>";
$b--;
echo "After decrement b = " . $b . "<br><br>";
// String Operator
echo "String Operator:<br>";
$name = "PHP";
$course = "Programming";
echo $name . " " . $course . "<br><br>";
// Conditional Operator
echo "Conditional Operator:<br>";
$result = ($a > $b) ? "a is bigger" : "b is bigger";
echo $result;
?>

