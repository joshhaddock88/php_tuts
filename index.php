<?php 

//                             ** TUT 4: VARIABLES AND CONSTANTS
// echo 'Hello, World!';
// variables (can't start with number or special character. Should start with lower case)

//define function is used to create a constant.
// by convention, constant names are all caps
//define('NAME', 'Yoshi');

// $variable to define a non-constant variable
// $name = 'Yoshi';
//$age = 30;

// name can be overridden in this instance, because it is non-constant
// $name = 'Mario';

//                           ** TUT 5: STRING TUTORIAL

//$stringOne = 'My email is ';
//$stringTwo = 'joshhaddock88@gmail.com';

//Concat is done with a "."
//echo $stringOne . $stringTwo;
// You don't need a space. They can be touching and it will still work.

$name = 'Mario';
//echo 'Hey, my name is ' . $name;

//If you use double quotes you can call variables directly without concating
// This is called variable interpolation
//echo "Hey, my name is $name";

// This is how you use escape notation
//echo "The ninja screamed \"Waaa\"";
// alternatively you could use single quotes and then double quotes
//echo 'The ninja scream "Waaa"';

// You can use square brackets to find the index of a single char in a string;
//echo $name[0];

// common string functions to know
// echo strlen($name);
// echo strtoupper($name);
// echo strtolower($name);
// three arguments: What to replacement, the replacement, and the string to replace on
// echo str_replace('M', 'W', $name);

?>

<!-- HTML SANDBOX -->
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        <h1>User Profile Pages</h1>

    </body>
</html>