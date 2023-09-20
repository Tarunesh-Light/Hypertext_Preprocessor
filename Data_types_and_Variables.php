<?php 

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name="Tarun";
$age=40;
$bOol=true;   //Echo produces a value 1
$amt=10.5;



echo "$name,$age,$bOol,$amt";    //Prints values
echo '$name,$age,$bOol,$amt';    //Prints as it is
echo $name."is Tarunesh";
echo '5'+'5';

define('NAME','Kira');
echo NAME;
?>

