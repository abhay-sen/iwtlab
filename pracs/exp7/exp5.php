<?php
// a. If statement
$grade = 85;
if ($grade >= 90) {
    echo "Grade: A";
}

echo "<br>";

// b. If-else statement
$marks = 75;
if ($marks >= 60) {
    echo "Pass";
} else {
    echo "Fail";
}

echo "<br>";

// c. Switch statement
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the week";
        break;
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
        echo "Midweek";
        break;
    case "Friday":
        echo "End of the week";
        break;
    default:
        echo "Invalid day";
}
?>
