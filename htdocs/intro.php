<?php
echo "<h1>Hello World</h1>";
$v1 = 10;
$v2 = 20;
echo "Add= " . $v1 + $v2; // '.' -> used to concatinate
//Magic Variables
echo __DIR__;
echo __FILE__;
echo __LINE__;
//-------------
$g1 = 10;
function gl()
{
    global $g1;
    $g2 = 20;
    echo $g1 + $g2;
}
gl();
//super global variable-> created automatically by the server based upon the condition
function supGlobal()
{
    $g3 = 30;
    echo $GLOBALS['g1'] + $g3;
}
print_r($GLOBALS); //printr() -> prints the array
/* $GLOBALS[] -> Associative array created when variable are initialized
   $_GET[] 
   $_POST[]
   $_FILES[][]
   $_REQUEST[]
   $_COOKIE[]
   $_SESSION
   $_SERVER[]
   $_ENV
*/

$associative  = array("Name" => "Kartick", "Section" => "A"); // Associative Array
echo $associative['Name']; // Accessing of elements in Associative Array
$indexed = array(1, 2, 3, 4, 5, "GEU", true); //Indexed Array
echo $indexed[4];
