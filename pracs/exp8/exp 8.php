<?php
// a. Indexed array
$fruits = ["Apple", "Banana", "Orange", "Mango"];

// Print the indexed array
echo "Indexed Array (Fruits):<br>" . implode("<br>", $fruits) . "<br><br>";

// b. Associative array
$student = ["name" => "John Doe", "age" => 25, "city" => "New York"];

// Print the associative array
echo "Associative Array (Student Info):<br>";
foreach ($student as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
}
echo "<br>";

// c. Multidimensional array
$employees = [
    ["name" => "Alice", "department" => "HR", "salary" => 50000],
    ["name" => "Bob", "department" => "IT", "salary" => 60000],
    ["name" => "Charlie", "department" => "Finance", "salary" => 55000]
];

// Print the multidimensional array
echo "Multidimensional Array (Employees):<br>";
foreach ($employees as $employee) {
    echo implode(", ", array_map(function ($value, $key) { return ucfirst($key) . ": " . $value; }, $employee, array_keys($employee))) . "<br>";
}
?>
