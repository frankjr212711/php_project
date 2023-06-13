<?php 
    // CONSTANTS
    define("TITLE", "Introduction to PHP"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="/styles.css" rel="stylesheet">


    <title>PHP Syntax <?php echo TITLE; ?></title>

</head>
<body>

    <div class="container">

        
      
    </div>
    <?php 
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

        // PLAIN VARIABLES
            $username = "john_doe";
            $fullName = "John Doe";
            $age = 35;
            $gender = "Male";
            $country = "Mexico";


            // SIMPLE ARRAY
            $user = Array(
                        "john_doe",
                        "John Doe",
                        32,
                        "Male",
                        "Mexico"
            );
            // echo $user;

            // ECHO VALUES OF AN ARRAY
            // echo $user[0] ."<br>";
            // echo $user[1] ."<br>";
            // echo $user[2] ."<br>";
            // echo $user[3] ."<br>";
            // echo $user[4] ."<br>";
 
    ?>
    
<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>