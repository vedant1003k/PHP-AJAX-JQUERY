<?php
// Demonstrating gettype(), settype(), isset(), and unset()

// Initialize a variable
$var = 10;

// gettype() - Get the type of a variable
echo "The type of \$var is: " . gettype($var) . "\n"; // Output: integer
echo "<br>";
echo "<br>";

// settype() - Set the type of a variable
settype($var, "string");
echo "After settype, the type of \$var is: " . gettype($var) . "\n"; // Output: string
echo "<br>";
echo "<br>";
// Demonstrate that the variable type has changed
echo "\$var is now: " . $var . "\n"; // Output: 10 (as a string)
echo "<br>";
echo "<br>";
// isset() - Check if a variable is set and is not NULL
if (isset($var)) {
    echo "\$var is set.\n"; // This will be printed
} else {
    echo "\$var is not set.\n";
}
echo "<br>";
echo "<br>";
// Unset the variable
unset($var);

// Check if the variable is unset
if (isset($var)) {
    echo "\$var is still set.\n";
} else {
    echo "\$var is now unset.\n"; // This will be printed
}
echo "<br>";
echo "<br>";
// Demonstrate setting and unsetting an array element

$array = ["apple", "banana", "cherry"];

// for($x = 0; $x < $arrlength; $x++) {
//     echo $array[$x];
//     echo "<br>";
// }
// print_r($array);

echo $array;
    

echo "Before unset, array is: " . implode(", ", $array) . "\n"; // Output: apple, banana, cherry
echo "<br>";
echo "<br>";

$age = array("Peter" => "105", "Ben" => "37", "Joe" => "43");

print_r($array);
echo "<br>";
echo "<br>";
foreach ($age as $x => $value) {
    echo "Key = " . $x . " , Value = " . $value;
}


ksort($age);

echo "<br>";
echo "<br>";
// foreach ($age as $x => $value) {
//     echo "Key = " . $x . " , Value = " . $value;
// }
// Unset the second element (banana)
// unset($array[1]);
echo "After unset, array is: " . implode(", ", $array) . "\n"; // Output: apple, cherry (banana is removed)
echo "<br>";
echo "<br>";
// foreach ($array as $x => $value) {
//     echo "Key = " . $x . " , Value = " . $value;
// }
// Checking if the array element is set
if (isset($array[1])) {
    echo "\$array[1] is set.\n";
} else {
    echo "\$array[1] is not set.\n"; // This will be printed
}
