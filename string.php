<?php

// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($str) {
    return preg_match_all('/[aeiou]/i', $str, $matches);
}

// Function to reverse a string
function reverseString($str) {
    return strrev($str);
}

// Iterate over each string in the array
foreach ($strings as $string) {
    // Count vowels in the string
    $vowelCount = countVowels($string);
    
    // Reverse the string
    $reversedString = reverseString($string);
    
    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString<br>";
}

?>