<?php
//---------task-1-----------
//q.1)Declare a variable $name with your name.
$name ="Md.Abdullah-Al-Yousuf";

//q.2) Print the content of $name.
echo $name;

//q.3)Create a variable $age with your age (as a number) and print a message with your name and age.
$name ="Md.Abdullah-Al-Yousuf";
 $age=37;
echo "My name is $name and my age is $age";

//q.4)Try declaring a variable inside a function and print it outside. What happens?

function webdev(){
    $num=10;
}
webdev();
echo $sum;

//q.5)Combine two variables, $city and $country, into a new variable $location. Print the result.

$city="Dhaka";
$country="Bangladesh";
$location=$city." ".$country;
echo $location;

//q.6)Create a variable with an invalid name. Correct it.

$1invalidVariable = "This is invalid";

// Corrected variable name
$correctedVariable = "Now it's valid";

// Output
echo $correctedVariable;

//q.7)Create a variable $fruit and use it to create a new variable dynamically. Print its value.

// Define the base variable
$fruit = "apple";

// Create a new variable dynamically using variable variables
$newVariable = $fruit . "_count";

// Set a value for the dynamically created variable
$$newVariable = 10;

// Print the value of the dynamically created variable
echo "The count of $fruit is: " . $$newVariable;


//q.8)Assign a word to $wordVar, a number to $numVar, and true/false to $boolVar. Print their types.

$wordVar = "Hello";
$numVar = 42;
$boolVar = true;

// Print the types of the variables
echo "Type of \$wordVar: " . gettype($wordVar) . "\n";
echo "Type of \$numVar: " . gettype($numVar) . "\n";
echo "Type of \$boolVar: " . gettype($boolVar) . "\n";



//-------------task2------------

// q.3)Define a constant called PI with a numeric value.
define("PI", 3.14159);
echo "The value of PI is: " . PI;

// q.4)Create a variable $isTrue and assign a boolean value to it. Print the value.

$isTrue = true;

// Print the value of $isTrue
echo "The value of \$isTrue is: " . var_export($isTrue, true);

//q.5)Explain the difference between using single quotes (') and double quotes (") when working with strings in PHP.

//single-quoted strings are slightly faster than double-quoted strings because they are treated as literals, and PHP doesn't need to check for variable interpolation or escape sequences.

//q.6)Create a variable $price and assign a floating-point number to represent a price. Print the value.
$price = 12.56;
echo $price;

//q.7)Create an array called $colors with at least three color names. Print the array.

$colors=["green","red","blue"];
echo  $colors[0]. "\n";
echo  $colors[1]. "\n";
echo  $colors[2]. "\n";

//q.8) Create a variable $isNull and explicitly assign a null value to it.
$isNull = null;

// Check and print the value of $isNull
echo "The value of \$isNull is: " . var_export($isNull, true);

//q.9)Create a variable $numString with a numeric string value. Convert it to an integer and print the result.

// Create a variable $numString with a numeric string value
$numString = "123";

// Convert $numString to an integer
$integerValue = (int)$numString;

// Print the result
echo "Original value: $numString\n";
echo "Converted to integer: $integerValue\n";

//q.10)Use the gettype() function to determine and print the data type of the variable $isTrue.

$isTrue = true;
echo "The data type of \$isTrue is: " . gettype($isTrue);

//q.11)Explain that PHP doesn't have a specific data type for characters. Create a variable $myChar and assign a character to it (hint: use a string).
$myChar = 'A';

// Print the value and type of $myChar
echo "Value of \$myChar: $myChar\n";
echo "Data type of \$myChar: " . gettype($myChar);

// -------------task-3---------

//1. Concatenate variables $firstName and $lastName to form a full name. Print the result.
$firstName = "Md.Abdullah-";
$lastName = "Al-Yousuf";
echo "My full name is $firstName $lastName";


//2. Declare a variable $message and print its length.

$message = "Hello, world!";
$length = strlen($message);

echo "The length of the message is: $length";

//3. Given $sentence = "PHP is powerful", extract and print the substring "powerful."

$sentence = "PHP is powerful";
$substring = substr($sentence, 7, 9);

echo "Substring: $substring";

//4. Create a variable $word with a lowercase value. Convert it to uppercase and print.
$word = "lowercase";
$uppercaseWord = strtoupper($word);

echo "Original word: $word\n";
echo "Uppercase word: $uppercaseWord";

//5. Create a variable $sentence with extra whitespace. Trim the whitespace and print the cleaned sentence.

$sentence = "    This is a sentence with extra whitespace.    ";
$cleanedSentence = trim($sentence);

echo "Original sentence: $sentence\n";
echo "Cleaned sentence: $cleanedSentence";

//6. Given $sentence = "I love PHP", replace "PHP" with "JavaScript" and print the updated sentence.

$sentence = "I love PHP";
$updatedSentence = str_replace("PHP", "JavaScript", $sentence);

echo "Original sentence: $sentence\n";
echo "Updated sentence: $updatedSentence";

//7. Compare "apple" and "orange" strings. Print whether they are equal or not.
$string1 = "apple";
$string2 = "orange";

if ($string1 == $string2) {
    echo "The strings are equal.";
} else {
    echo "The strings are not equal.";
}

//8. Check if "Hello World" contains the substring "World." Print the result.

$mainString = "Hello World";
$substring = "World";

if (strpos($mainString, $substring) !== false) {
    echo "The substring '$substring' is present in the string '$mainString'.";
} else {
    echo "The substring '$substring' is not present in the string '$mainString'.";
}

//9. Create an array of words from "This is a sentence" and implode it to form the original sentence.
// Original sentence
$originalSentence = "This is a sentence";

// Explode the sentence into an array of words
$wordArray = explode(" ", $originalSentence);

// Implode the array to form the original sentence
$reconstructedSentence = implode(" ", $wordArray);

// Print the results
echo "Original sentence: $originalSentence\n";
echo "Reconstructed sentence: $reconstructedSentence";


//10. Create variables $product and $price. Use them in a sentence with string interpolation.
$product = "Laptop";
$price = 12000.50;

// Sentence with string interpolation
$sentence = "The $product costs $$price.";

// Print the sentence
echo $sentence;


//11. Reverse the string "abcdef" and print the result.
$string = "abcdef";
$reversedString = strrev($string);

echo "Original string: $string\n";
echo "Reversed string: $reversedString";


//12. Find and print the position of the letter "a" in the string "PHP is awesome."
$string = "PHP is awesome.";
$position = strpos($string, "a");

if ($position !== false) {
    echo "The position of 'a' in the string is: $position";
} else {
    echo "The letter 'a' is not found in the string.";
}

// -----------task-04--------------
//q.1) 1. Perform addition, subtraction, multiplication, and division on two variables, `$num1` and `$num2`.
$num1=12;
$num2=20;
$addition=$num1+$num2;
$substraction=$num1-$num2;
$multiplication=$num1*$num2;
$division=$num1/$num2;
echo $addition."\n";
echo $substraction."\n";
echo $multiplication."\n";
echo $division."\n";

//q.2)Compare if `$value1` is greater than `$value2`.
$num1=12;
$num2=20;
if($num1>$num2){
    echo ("$num1 is greater than $num2");
}else{
    echo ("$num1 is less than $num2");
}

//q.3)Use the logical AND operator to check if both `$condition1` and `$condition2` are true.
$num1=12;
$num2=20;
$num3=30;
if($num1>$num2 && $num1>$num3){
    echo ("$num1 is greater than $num2 and $num3");
}elseif($num2>$num1 && $num2>$num3){
    echo ("$num2 is greater than $num1 and $num3");
}else{
    echo ("$num3 is greater than $num1 and $num2");
}

//q.4)Increment the value of `$counter` by 1 using the shorthand notation.
$counter = 5;
$counter++; // Increment by 1 using shorthand notation

echo $counter; // Output: 6

//q.5)Create a variable `$isTrue` and use the NOT operator to check if it is false.
$isTrue = false;

if (!$isTrue) {
    echo '$isTrue is false.';
} else {
    echo '$isTrue is true.';

//q.6)  Perform a modulus operation on `$number` with a divisor of 3.
$number = 10;
$result = $number % 3;

echo "The result of $number % 3 is: $result";

//q.7) Combine two strings, `$str1` and `$str2`, using the concatenation operator.
$str1 = "Hello, ";
$str2 = "world!";
$combinedString = $str1 . $str2;

echo $combinedString;

//q.8)Use the ternary operator to assign the value "Even" or "Odd" to `$result` based on whether `$num` is even or odd.
$num = 7;
$result = ($num % 2 == 0) ? "Even" : "Odd";

echo "The number is $result.";

//q.9)Check if `$var1` is equal to `$var2` and has the same data type.
$var1 = 5;
$var2 = "5";

if ($var1 === $var2) {
    echo '$var1 is equal to $var2 and has the same data type.';
} else {
    echo '$var1 is not equal to $var2 or they do not have the same data type.';
}

//q.10)Perform the bitwise AND operation on `$bitwise1` and `$bitwise2`.
$bitwise1 = 5;  // Binary representation: 101
$bitwise2 = 3;  // Binary representation: 011

$result = $bitwise1 & $bitwise2;

echo "The result of bitwise AND is: $result";

//q.11)Use the null coalescing operator to assign the value of `$fallback` if `$input` is null.
$input = null;
$fallback = "Default Value";

$result = $input ?? $fallback;

echo "The result is: $result";

//q.12)Create a variable `$isTrue` and use the spaceship operator to compare it with another variable.
$isTrue = true;
$comparisonResult = $isTrue <=> false;

if ($comparisonResult == -1) {
    echo '$isTrue is less than false.';
} elseif ($comparisonResult == 0) {
    echo '$isTrue is equal to false.';
} else {
    echo '$isTrue is greater than false.';
}


// ----------task-5-----------
//q.1)Check if `$number` is greater than 5. If true, print "Greater than 5," else print "Not greater than 5."
$number = 8;

if ($number > 5) {
    echo "Greater than 5.";
} else {
    echo "Not greater than 5.";
}

//q.2)Determine if `$isRaining` is true. If true, print "Take an umbrella," else print "Enjoy the weather."
$isRaining = true;

if ($isRaining) {
    echo "Take an umbrella.";
} else {
    echo "Enjoy the weather.";
}

//q.3)Check if `$userType` is "guest." If true, print "Welcome guest!" Otherwise, print "Welcome back!"
$userType = "guest";

if ($userType === "guest") {
    echo "Welcome guest!";
} else {
    echo "Welcome back!";
}

//q.4)Verify if `$isLogged` is false. If false, print "Please log in," else print "Welcome back!"
$isLogged = false;

if (!$isLogged) {
    echo "Please log in.";
} else {
    echo "Welcome back!";
}

//q.5) Check if `$temperature` is less than 20 degrees Celsius. If true, print "It's cold," else print "It's not too cold."
$temperature = 18;

if ($temperature < 20) {
    echo "It's cold.";
} else {
    echo "It's not too cold.";
}

//q.6)Determine if `$numCookies` is equal to 0. If true, print "No cookies left," else print "Enjoy your cookies!"
$numCookies = 3;

if ($numCookies == 0) {
    echo "No cookies left.";
} else {
    echo "Enjoy your cookies!";
}

//q.7)Check if `$isWeekend` is false. If false, print "It's a weekday," else print "It's the weekend!"
$isWeekend = false;

if (!$isWeekend) {
    echo "It's a weekday.";
} else {
    echo "It's the weekend!";
}

//q.8)Verify if `$isEvening` is true. If true, print "Good evening!" Otherwise, print "Good day!"
$isEvening = true;

if ($isEvening) {
    echo "Good evening!";
} else {
    echo "Good day!";
}

//q.9)Check if `$userAge` is greater than or equal to 18. If true, print "You are eligible," else print "You are underage."
$userAge = 20;

if ($userAge >= 18) {
    echo "You are eligible.";
} else {
    echo "You are underage.";
}

//q.10)Determine if `$isSunny` is true. If true, print "It's a sunny day," else print "Weather is not sunny."
$isSunny = true;

if ($isSunny) {
    echo "It's a sunny day.";
} else {
    echo "Weather is not sunny.";
}


?>