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

// $name = 'Mario';
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

//                       ** TUT 6: INTS & FLOATS

// int
// $radius = 25;
// float
// $pi = 3.14;

// basic -, *, /, +, **

// echo $pi * $radius ** 2;

// Order of operation ( B I D M A S )
// brackets, indices, division, multiplication, addition, subtraction
// echo 2 * (4 + 9) / 3;

// increment & decrement operators

//$radius++; // adds 1 to radius
//$radius--;

// shorthand operators
// +=, -=, *=

// number functions

// echo floor($pi); display 3
// echo ceil($pi); display 4
// echo pi(); returns value of pi

//                           ** TUT 7: ARRAYS

// indexed arrays

// $peopleOne = ['Shaun', 'Crystal', 'Ryan'];
// echo $peopleOne[1];
// $peopleTwo = array('Ken', 'Chun-Li');
// echo $peopleTwo[1];

// $ages = [20, 30, 40, 50];
// echo $ages; < does not work because echo expects a string.
// print_r($ages); < does work. Print readable.

// $ages[1] = 25;
// print_r($ages);

// $ages[] = 60;
// print_r($ages);
// array_push($ages, 70);
// print_ur($ages);

// echo count($ages);

// $peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// Associative Arrays

// $ninjasOne = ['Shaun' => 'black', 'Mario' => 'orange', 'Luigi' => 'brown'];
//echo $ninjasOne['Mario'];
// print_r($ninjasOne);

// $ninjasTwo = array('Bowser' => 'green', 'Peach' => 'yellow');
// print_r($ninjasTwo);

// $ninjasTwo['Peach'] = 'pink';
// print_r($ninjasTwo);

// echo count($ninjasOne);

// $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
//print_r($ninjasThree);

//-----------------------------------------TUT 8: MULTIDIMENSIONAL ARRAYS-----------------------------

//$blogs = [
//    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
//    ['title' => 'Mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
//    ['title' => 'Zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
//];

//print_r($blogs[1][1]);
// echo $blogs[2]['author'];
// echo count($blogs);

// $blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'likes' => 100];

// print_r($blogs);
// $popped = array_pop($blogs); - gets rid of the last element in the array

// ---------------------------------------------- TUT 9 : LOOPS ----------------------------------------

// basic 'for' loop
//for($i = 0; $i < 5; $i++){
//    echo 'some template';
//}

//for($i = 0; $i < count($variable); i++){
//    echo 'some template';
//}

//foreach($variable as $variable) {
//    echo 'some template'
//}

$ninjas = ['Shaun', 'Ryu', 'Yoshi'];

// for($i = 0; $i < count($ninjas); $i++){
//     echo $ninjas[$i] . '<br />';
// }

// foreach($ninjas as $ninja){
//     echo $ninja . '<br />';
// }

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana peel', 'price' => 2]
];

// foreach($products as $product){
//     echo $product['name'] . ': ' . $product['price'];
//     echo '<br />';
// }

// $i = 0;
// while($i < count($products)){
//     echo $products[$i]['name'];
//     echo '<br />';
//     $i++;
// }

//----------------------------------------------------- TUT 10 : BOOLS --------------------------------------------------------

//echo true; evaluates to "1";
//echo false; false is translated to "";

// NUMBERS
// echo 5 > 10;
// echo 5 < 10; "1"
// echo 5 == 10;
// echo 5 == "5"; "1"
// echo 5 != 10;
// echo 5 <= 5; "1"
// echo 5 >= 5; "1"

//STRINGS
// echo 'shaun' < 'yoshi'; "1"
// echo 'shaun' > 'yoshi';
// echo 'shaun' > 'Shaun'; "1"
// echo 'mario' == 'Mario'; false

// LOOSE EQUALITY VS STRICT EQUALITY
// Loose equality does not check for type
// 5 == '5'; "1"
// Strict equality does.
// 5 === '5'; false
// 5 == 5 || 5 === 5 both true

?>

<!-- HTML SANDBOX -->
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Tutorials</title>
    </head>
    <body>
        <h1>Products</h1>
        <ul>
            <?php foreach($products as $product) { ?>
                <h3><?php echo $product['name']; ?></h3>
                <p>$<?php echo $product['price']; ?></p>
            <?php } ?>
        </ul>

    </body>
</html>