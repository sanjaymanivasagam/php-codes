<?php
$text = "Hello PHP Programming";
// String length
echo "Length: " . strlen($text);
echo "<br>";
// Count words
echo "Word Count: " . str_word_count($text);
echo "<br>";
// Reverse string
echo "Reverse: " . strrev($text);
echo "<br>";
// Uppercase
echo "Uppercase: " . strtoupper($text);
echo "<br>";
// Lowercase
echo "Lowercase: " . strtolower($text);
echo "<br>";
// Replace string
echo "Replace: " . str_replace("PHP", "Java", $text);
echo "<br>";
// Find position
echo "Position of PHP: " . strpos($text, "PHP");
echo "<br>";
// Substring
echo "Substring: " . substr($text, 6, 3);
echo "<br>";
// Remove spaces
$name = "   Sanjay   ";
echo "Trim: " . trim($name);
?>