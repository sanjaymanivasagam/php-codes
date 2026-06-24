<?php
// 1. Indexed Array
$fruits = array("Apple", "Banana", "Mango");

echo "Indexed Array:<br>";

foreach($fruits as $fruit)
{
    echo $fruit . "<br>";
}
echo "<br>";
// 2. Associative Array
$student = array(
    "Name" => "Sanjay",
    "Age" => 21,
    "Course" => "PHP"
);

echo "Associative Array:<br>";
foreach($student as $key => $value)
{
    echo $key . " : " . $value . "<br>";
}
echo "<br>";
// 3. Multidimensional Array
$marks = array(
    array("Maths", 90),
    array("PHP", 85),
    array("Java", 80)
);
echo "Multidimensional Array:<br>";
for($i = 0; $i < count($marks); $i++)
{
    echo $marks[$i][0] . " : " . $marks[$i][1] . "<br>";
}

?>