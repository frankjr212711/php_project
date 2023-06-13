<?php 
    // CONSTANTS
    define("TITLE", "PHP Varibles & Constants"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntax <?php echo TITLE; ?></title>
</head>
<body>

 <!-- html comment -->
    <?php 

        echo "hello, world in a brackets";
        echo ("Hello, world :) ");

        // comments
    ?>

    <?php 
        print('hello world <br>');
        Print('Hello World <br>');
        PRINT('HELLO WORLD <br><br>');
    
        // VARIABLES
        $name = "Joe";
        echo "hello " . $name . "<br>";
        echo "hello " . $name . "<br>";
        echo "hello " . $name . "<br>";

        // BOOLEAN: a boolean value specifies if a value is true or false
        $loggedIn = true;
        $loggedOut = false;

        // INTEGER: is a number value
        $myAge = 35;

        // FLOATING POINT: Usually a fractional number with a decimal
        $totalPrice = 136.56;

        // STRING: Simple value that is enclosed by double quotations.

        $fullName = "Brad Hussey";
        $fullName = "John Doe";

        // DISPLAY VARIABLES ON SCREEN
        echo "Hello my name is $fullName and I am $myAge years old <br>";

        // CONSTANTS
        define("TITLE", "PHP Varibles & Constants "); 
        echo TITLE;



 
    
    ?>







</body>
</html>