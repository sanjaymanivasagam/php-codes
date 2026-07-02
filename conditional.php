<?php

echo "<h2>1. Simple If Statement</h2>";

function checkAge($age) {
    if ($age >= 18) {
        echo "You are an adult<br>";
    }
}
checkAge(20);
checkAge(15);

echo "<h2>2. If-Else Statement</h2>";

function checkNumber($num) {
    if ($num > 0) {
        echo "Number is positive<br>";
    } else {
        echo "Number is not positive<br>";
    }
}
checkNumber(10);
checkNumber(-5);

echo "<h2>3. If-Elseif-Else Statement</h2>";

function gradeCheck($score) {
    if ($score >= 80) {
        echo "Grade: A<br>";
    } elseif ($score >= 70) {
        echo "Grade: B<br>";
    } elseif ($score >= 60) {
        echo "Grade: C<br>";
    } else {
        echo "Grade: F<br>";
    }
}
gradeCheck(85);
gradeCheck(75);
gradeCheck(55);

echo "<h2>4. Switch Statement</h2>";

function getDayName($day) {
    switch ($day) {
        case 1:
            echo "Monday<br>";
            break;
        case 2:
            echo "Tuesday<br>";
            break;
        case 3:
            echo "Wednesday<br>";
            break;
        case 4:
            echo "Thursday<br>";
            break;
        case 5:
            echo "Friday<br>";
            break;
        default:
            echo "Weekend<br>";
    }
}
getDayName(1);
getDayName(6);

echo "<h2>5. Ternary Operator</h2>";

function checkStatus($age) {
    $status = ($age >= 18) ? "Adult" : "Minor";
    echo "Status: " . $status . "<br>";
}
checkStatus(20);
checkStatus(15);

echo "<h2>6. Multiple Conditions (AND)</h2>";

function checkLogin($username, $password) {
    if ($username == "admin" && $password == "123456") {
        echo "Login successful<br>";
    } else {
        echo "Login failed<br>";
    }
}
checkLogin("admin", "123456");
checkLogin("admin", "wrong");

echo "<h2>7. Multiple Conditions (OR)</h2>";

function checkVIP($role) {
    if ($role == "admin" || $role == "manager") {
        echo "Access granted<br>";
    } else {
        echo "Access denied<br>";
    }
}
checkVIP("admin");
checkVIP("user");

echo "<h2>8. Nested Conditions</h2>";

function checkEligibility($age, $income) {
    if ($age >= 21) {
        if ($income >= 30000) {
            echo "Eligible for loan<br>";
        } else {
            echo "Income too low<br>";
        }
    } else {
        echo "Too young<br>";
    }
}
checkEligibility(25, 40000);
checkEligibility(20, 50000);

echo "<h2>9. Conditional with isset()</h2>";

$name = "Ali";

function checkVariable($var) {
    if (isset($var)) {
        echo "Variable is set: " . $var . "<br>";
    } else {
        echo "Variable is not set<br>";
    }
}
checkVariable($name);
checkVariable($undefined);

echo "<h2>10. Conditional with empty()</h2>";

function validateInput($input) {
    if (empty($input)) {
        echo "Input is empty<br>";
    } else {
        echo "Input: " . $input . "<br>";
    }
}
validateInput("Hello");
validateInput("");

?>
