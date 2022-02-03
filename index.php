<?php 

// echo 'Hello, World!';
// variables (can't start with number or special character. Should start with lower case)

//define function is used to create a constant.
// by convention, constant names are all caps
define('NAME', 'Yoshi');

// $variable to define a non-constant variable
// $name = 'Yoshi';
$age = 30;

// name can be overridden in this instance, because it is non-constant
// $name = 'Mario';


?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        <h1>User Profile Pages</h1>

        <div><?php echo NAME ?></div>
        <div><?php echo $age ?></div>
    </body>
</html>