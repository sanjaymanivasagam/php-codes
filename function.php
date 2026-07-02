<?php

echo "<h2>1. Simple Function</h2>";

// Simple function without parameters
function greet() {
    echo "Hello, welcome to PHP functions!";
}

greet();

echo "<h2>2. Function with Parameters</h2>";

function addNumbers($a, $b) {
    return $a + $b;
}

echo "<br>Sum: " . addNumbers(10, 20);

echo "<h2>3. Function with Default Parameter</h2>";


function welcome($name = "Guest") {
    echo "<br>Hello, $name!";
}

welcome();
welcome("Alice");

echo "<h2>4. Passing Arguments by Reference</h2>";

function addValue(&$num) {
    $num += 10;
}
$value = 5;
addValue($value);
echo "<br>Updated value: " . $value;

?>
