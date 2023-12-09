<?php
$x = 5985;
echo"Interger ";
var_dump(is_int($x));
echo"<br>";
echo $x . PHP_INT_MAX;
echo"<br>";
echo $x . PHP_INT_MIN;
echo"<br>";
echo $x . PHP_INT_SIZE;
echo"<br>";

$x = 59.85;
echo "Float ";
var_dump(is_int($x));
echo"<br>";
echo $x . PHP_INT_MAX;
echo"<br>";
echo $x . PHP_INT_MIN;
echo"<br>";
echo $x . PHP_INT_SIZE;
echo"<br>"; 

// Infinite
$z = 1.9e098;
var_dump(is_float($z));
echo "<br>";
var_dump(is_infinite($z));

echo "<br>";
$x = acos(8);
var_dump($x);


$x = 5985;
var_dump(is_numeric($x));
echo "<br>";

$x = "5985";
var_dump(is_numeric($x));
echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";

$x = 109992;
$str_cast = (float)$x;
var_dump($str_cast);
echo "<br>";

$x = 109.992;
$int_cast = (int)$x;
echo($int_cast);