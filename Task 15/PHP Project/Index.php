<?php
//  Print message
echo "Welcome to php<br>";

//  Define variables
$x = 5;
$y = 'Welcome ';
$z = true;

//  Display the type of each variable
echo "The type of \$x is: " . gettype($x) . "<br>";
echo "The type of \$y is: " . gettype($y) . "<br>";
echo "The type of \$z is: " . gettype($z) . "<br>";

//  Define a constant
define("INSTITUTE", "ITI");

//  Display gettype() of all variables and constant
echo "The type of \$x is: " . gettype($x) . "<br>";
echo "The type of \$y is: " . gettype($y) . "<br>";
echo "The type of \$z is: " . gettype($z) . "<br>";
echo "The type of constant INSTITUTE is: " . gettype(INSTITUTE) . "<br>";
?>

