<?php 
    // CONSTANTS
    define("TITLE", "Loops"); 
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

            // WHILE LOOP
        $startingNum = 1;
        while($startingNum <= 200) {
            echo "$startingNum &nbsp;";
            // increment by 1 
            $startingNum++;
        }
       
            // FOR LOOP
            for($a = 30; $a <= 40; $a++) {
                echo "$a";
            }   

            // FOREACH LOOP
            $friends = array('jim', 'jake', 'joe', 'jane');
            forEach($friends as $friend) {
                echo $friend.' is my friend <br>';
            }

            // DO WHILE LOOP
            $foo = 10;
            do { // do this 
                echo "Numero $foo <br>";
                $foo++;
            } while( $foo <= 50)

            

    ?>

    </div>



<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>