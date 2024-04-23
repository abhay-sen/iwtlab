<?php
// a. Calculate length of string
function calculateStringLength($str) {
    $length = 0;
    while (isset($str[$length++]));
    return $length - 1;
}

$string = "Hello, World!";
echo "Length of String: " . calculateStringLength($string) . "<br>";

// b. Count number of words in string without using string functions
function countWords($str) {
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] == " ") $count++;
    }
    return $count + 1;
}

$string2 = "This is a sample string.";
echo "Number of Words: " . countWords($string2) . "<br>";
?>
