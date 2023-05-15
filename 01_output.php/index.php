<?php
/* ----- For project 1st message ----- */

/*require_once 'vendor/autoload.php';
use App\classes\HelloWorld;

$helloWorld = new HelloWorld();
$helloWorld->index();*/


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

//Variable initiallization

$name = 'Brad<br/>';//String
$age = 20;//Int
$has_kids = false;//boolean
$cash_on_hand = 20.32;//float

//print those values

echo $name;
echo '<br/>';

echo $age;
echo '<br/>';

echo $has_kids;
echo '<br/>';

echo $cash_on_hand;
echo '<br/>';

define('HOST','localhost');
define('DB_NAME','dev_db');

echo HOST;
echo '<br/>';
echo DB_NAME;
?>