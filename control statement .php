<?php
// if statement
$age = 20;
echo "IF Statement:<br>";
if($age >= 18)
{
    echo "You are eligible to vote<br><br>";
}
// if else statement
$number = 10;
echo "IF ELSE Statement:<br>";
if($number % 2 == 0)
{
    echo "Number is Even<br><br>";
}
else
{
    echo "Number is Odd<br><br>";
}
// if elseif else statement
$mark = 85;
echo "IF ELSE IF ELSE Statement:<br>";
if($mark >= 90)
{
    echo "Grade A<br>";
}
elseif($mark >= 75)
{
    echo "Grade B<br>";
}
else
{
    echo "Grade F<br>";
}
echo "<br>";
// Switch statement
$day = 2;
echo "Switch Statement:<br>";
switch($day)
{
    case 1:
        echo "Monday";
        break;

    case 2:
        echo "Tuesday";
        break;

    case 3:
        echo "Wednesday";
        break;

    default:
        echo "Invalid Day";
}
echo "<br><br>";
// For loop
echo "For Loop:<br>";
for($i=1; $i<=6; $i++)
{
    echo $i . "<br>";
}
echo "<br>";
// While loop
echo "While Loop:<br>";
$i = 1;
while($i<6)
{
    echo $i . "<br>";
    $i++;
}
echo "<br>";
// Foreach loop
echo "Foreach Loop:<br>";
$colors = array("Red","Green","Blue");
foreach($colors as $color)
{
    echo $color . "<br>";
}
// Break statement
echo "<br>Break Statement:<br>";
for($i=1; $i<=5; $i++)
{
    if($i==3)
    {
        break;
    }

    echo $i . "<br>";
}
// Continue statement
echo "<br>Continue Statement:<br>";
for($i=1; $i<=5; $i++)
{
    if($i==3)
    {
        continue;
    }

    echo $i . "<br>";
}
?>