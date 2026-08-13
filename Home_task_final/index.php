<?php

// 1. strlen()
// Counts the number of characters in a string.

$name = "Rahim";

echo "1. strlen(): ";
echo strlen($name);
echo "<br><br>";


// 2. str_word_count()
// Counts the number of words in a string.

$text = "PHP is easy to learn";

echo "2. str_word_count(): ";
echo str_word_count($text);
echo "<br><br>";


// 3. str_contains()
// Checks whether a string contains a specific word or text.

$text = "I am learning PHP";

echo "3. str_contains(): ";

if (str_contains($text, "PHP")) {
    echo "PHP is found";
} else {
    echo "PHP is not found";
}

echo "<br><br>";


// 4. strpos()
// Finds the position of a word or character in a string.

$text = "Hello PHP";

echo "4. strpos(): ";
echo strpos($text, "PHP");
echo "<br><br>";


// 5. strtoupper()
// Converts a string into uppercase letters.

$name = "rahim";

echo "5. strtoupper(): ";
echo strtoupper($name);
echo "<br><br>";


// 6. strtolower()
// Converts a string into lowercase letters.

$name = "RAHIM";

echo "6. strtolower(): ";
echo strtolower($name);
echo "<br><br>";


// 7. str_replace()
// Replaces a word or text with another word or text.

$text = "I like Java";

echo "7. str_replace(): ";
echo str_replace("Java", "PHP", $text);
echo "<br><br>";


// 8. strrev()
// Reverses a string.

$text = "Hello";

echo "8. strrev(): ";
echo strrev($text);
echo "<br><br>";


// 9. trim()
// Removes spaces from the beginning and end of a string.

$text = "   Hello PHP   ";

echo "9. trim(): ";
echo trim($text);
echo "<br><br>";


// 10. explode()
// Converts a string into an array using a separator.

$text = "CSE,EEE,BBA";

$departments = explode(",", $text);

echo "10. explode(): ";
print_r($departments);
echo "<br><br>";


// 11. implode()
// Converts an array into a string.

$students = array("Rahim", "Karim", "Hasan");

echo "11. implode(): ";
echo implode(", ", $students);
echo "<br><br>";


// 12. substr()
// Returns a part of a string.

$text = "Hello PHP";

echo "12. substr(): ";
echo substr($text, 0, 5);
echo "<br><br>";


// 13. is_int()
// Checks whether a value is an integer.

$number = 10;

echo "13. is_int(): ";

if (is_int($number)) {
    echo "It is an integer";
} else {
    echo "It is not an integer";
}

echo "<br><br>";


// 14. is_float()
// Checks whether a value is a float.

$number = 10.5;

echo "14. is_float(): ";

if (is_float($number)) {
    echo "It is a float";
} else {
    echo "It is not a float";
}

echo "<br><br>";


// 15. is_nan()
// Checks whether a value is Not-a-Number.

$number = acos(2);

echo "15. is_nan(): ";

if (is_nan($number)) {
    echo "It is NaN";
} else {
    echo "It is a number";
}

echo "<br><br>";


// 16. is_numeric()
// Checks whether a value is a number or numeric string.

$number = "123";

echo "16. is_numeric(): ";

if (is_numeric($number)) {
    echo "It is numeric";
} else {
    echo "It is not numeric";
}

echo "<br><br>";


// 17. round()
// Rounds a number to the nearest integer.

$number = 10.6;

echo "17. round(): ";
echo round($number);
echo "<br><br>";


// 18. define()
// Creates a constant value.

define("UNIVERSITY", "AIUB");

echo "18. define(): ";
echo UNIVERSITY;
echo "<br><br>";


// 19. date()
// Returns the current date in a specified format.

echo "19. date(): ";
echo date("d-m-Y");
echo "<br><br>";


// 20. strtotime()
// Converts a date string into a Unix timestamp.

$date = "2026-08-20";

echo "20. strtotime(): ";
echo strtotime($date);
echo "<br><br>";


// 21. time()
// Returns the current Unix timestamp.

echo "21. time(): ";
echo time();
echo "<br><br>";


// 22. date_default_timezone_set()
// Sets the default timezone.

date_default_timezone_set("Asia/Dhaka");

echo "22. date_default_timezone_set(): ";
echo date("d-m-Y h:i:s");
echo "<br><br>";


// 23. date_default_timezone_get()
// Returns the current default timezone.

echo "23. date_default_timezone_get(): ";
echo date_default_timezone_get();
echo "<br><br>";


// 24. include
// Includes another PHP file in the current file.

// include("header.php");

echo "24. include(): Includes another PHP file.";
echo "<br><br>";


// 25. require
// Includes another PHP file and stops the program if the file is missing.

// require("config.php");

echo "25. require(): Includes another PHP file.";
echo "<br><br>";


// 26. json_encode()
// Converts a PHP array into a JSON string.

$student = array(
    "name" => "Rahim",
    "id" => 101
);

echo "26. json_encode(): ";
echo json_encode($student);
echo "<br><br>";


// 27. json_decode()
// Converts a JSON string into a PHP object or array.

$json_data = '{"name":"Rahim","id":101}';

$student = json_decode($json_data);

echo "27. json_decode(): ";
echo $student->name;
echo "<br><br>";


// 28. array()
// Creates an array.

$students = array("Rahim", "Karim", "Hasan");

echo "28. array(): ";
print_r($students);
echo "<br><br>";


// 29. array_keys()
// Returns all the keys of an array.

$student = array(
    "name" => "Rahim",
    "id" => 101,
    "department" => "CSE"
);

echo "29. array_keys(): ";
print_r(array_keys($student));
echo "<br><br>";


// 30. array_merge()
// Combines two or more arrays.

$array1 = array("CSE", "EEE");
$array2 = array("BBA", "English");

$result = array_merge($array1, $array2);

echo "30. array_merge(): ";
print_r($result);
echo "<br><br>";


// 31. array_push()
// Adds one or more elements to the end of an array.

$students = array("Rahim", "Karim");

array_push($students, "Hasan");

echo "31. array_push(): ";
print_r($students);
echo "<br><br>";


// 32. array_reverse()
// Reverses the order of an array.

$students = array("Rahim", "Karim", "Hasan");

echo "32. array_reverse(): ";
print_r(array_reverse($students));
echo "<br><br>";


// 33. sizeof()
// Returns the number of elements in an array.

$students = array("Rahim", "Karim", "Hasan");

echo "33. sizeof(): ";
echo sizeof($students);
echo "<br><br>";


// 34. count()
// Counts the number of elements in an array.

$students = array("Rahim", "Karim", "Hasan");

echo "34. count(): ";
echo count($students);
echo "<br><br>";


// 35. sort()
// Sorts an array in ascending order.

$numbers = array(30, 10, 20);

sort($numbers);

echo "35. sort(): ";
print_r($numbers);
echo "<br><br>";


// End of all examples.

echo "All built-in function examples completed.";

?>