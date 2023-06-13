<?php 
    // CONSTANTS
    define("TITLE", "If Else &amp Else If Statement"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link href="/css/styles.css" rel="stylesheet">


    <title>PHP Intermediate <?php echo TITLE; ?></title>

</head>
<body>

<div class="container">
    <h1><?php echo TITLE?></h1>

    <?php

        // IF expression is TRUE do something 
        // IF expression is FALSE do nothing 

        $foo = 99;
        $bar = 79;
        if($foo > $bar) {
            // code to execute if TRUE
            echo $foo.' is greater than '.$bar."<br>";
        } 
   
            // ELSE

        $currentlyListeningTo = "Barenaked Ladies";

        if($currentlyListeningTo == "The tragically Hip") {
            echo "You're listening to $currentlyListeningTo";
        }    
        else {
            echo "Taking a wild guest, you're listening to $currentlyListeningTo"."<br>";
        }

        // ELSE IF 

        $favProgrammingLang = "PHP";

        if($favProgrammingLang == "C++") {
            echo "Your favorite programing language is $favProgrammingLang";
        } else if($favProgrammingLang == "PHP") {
            echo "Your favorite programing language is $favProgrammingLang";
        } else {
            echo "Your favorite programming language is not available";
        }

    ?>


</div>

<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>