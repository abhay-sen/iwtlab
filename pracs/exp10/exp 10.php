<?php
// Original string
$string = "Hello, World!";

// Display the original string
echo "Original String: " . $string . "<br>";

// 1. strlen(): Calculate length of string
echo "1. Length of String: " . strlen($string) . "<br>";

// 2. strtoupper(): Convert string to uppercase
echo "2. Uppercase: " . strtoupper($string) . "<br>";

// 3. strtolower(): Convert string to lowercase
echo "3. Lowercase: " . strtolower($string) . "<br>";

// 4. substr(): Get a substring
echo "4. Substring: " . substr($string, 0, 5) . "<br>";

// 5. strpos(): Find the position of a substring
echo "5. Position of 'World': " . strpos($string, "World") . "<br>";

// 6. str_replace(): Replace a substring
echo "6. Replace 'Hello' with 'Hi': " . str_replace("Hello", "Hi", $string) . "<br>";

// 7. strrev(): Reverse the string
echo "7. Reverse: " . strrev($string) . "<br>";

// 8. explode(): Split a string into an array based on a delimiter
$words = explode(" ", $string);
echo "8. Exploded Array: ";
print_r($words);
echo "<br>";

// 9. implode(): Join array elements into a string using a delimiter
$joinedString = implode("-", $words);
echo "9. Joined String: " . $joinedString . "<br>";

// 10. trim(): Remove whitespace or specified characters from the beginning and end of a string
$trimmedString = "  Hello, World!  ";
echo "10. Trimmed String: '" . trim($trimmedString) . "'<br>";

// 11. ucfirst(): Convert the first character of a string to uppercase
echo "11. Uppercase First Letter: " . ucfirst($string) . "<br>";

// 12. lcfirst(): Convert the first character of a string to lowercase
echo "12. Lowercase First Letter: " . lcfirst($string) . "<br>";
?>
