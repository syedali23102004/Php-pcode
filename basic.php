<?php

// =====================
// VARIABLES
// =====================
$name = "Ali";
$age = 14;
$marks = 75;

// =====================
// IF ELSE
// =====================
echo "<h3>IF ELSE Example:</h3>";

if ($marks >= 80) {
    echo "Grade: A<br>";
} elseif ($marks >= 60) {
    echo "Grade: B<br>";
} else {
    echo "Grade: Fail<br>";
}

// =====================
// SWITCH CASE
// =====================
echo "<h3>SWITCH Example:</h3>";

$day = 3;

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
    default:
        echo "Invalid Day<br>";
}

// =====================
// FOR LOOP
// =====================
echo "<h3>FOR LOOP:</h3>";

for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}

// =====================
// WHILE LOOP
// =====================
echo "<h3>WHILE LOOP:</h3>";

$x = 1;
while ($x <= 3) {
    echo "Value: $x <br>";
    $x++;
}

// =====================
// ARRAY
// =====================
echo "<h3>ARRAY Example:</h3>";

$fruits = array("Apple", "Banana", "Mango");

foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// =====================
// FUNCTION
// =====================
echo "<h3>FUNCTION Example:</h3>";

function greet($name) {
    return "Hello, " . $name;
}

echo greet("Ali");

// =====================
// FORM (GET METHOD)
// =====================
echo "<h3>FORM Example:</h3>";

?>

<form method="GET">
    Enter Name: <input type="text" name="user">
    <input type="submit" value="Submit">
</form>

<?php

if (isset($_GET['user'])) {
    $user = $_GET['user'];
    echo "Welcome, " . $user;
}

?>