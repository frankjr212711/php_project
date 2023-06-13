<?php 
    // CONSTANTS
    define("TITLE", "Introduction to PHP"); 

    if(isset($_POST["fix_submit"]) ) {

        // grab value from textarea in $_POST collection
        // make all letters lowercase using strtolower() function
        // store in a variable

        // $clickBait = strtolower($_POST["clickBait_headline"]);

        // store array of clickbait-sounding words or phrases
        $a = Array(
            "scientists",
            "doctors",
            "hate",
            "stupid",
            "weird",
            "simple",
            "trick",
            "shocked me",
            "you'll never believe",
            "hack",
            "epic",
            "unbelievable"
        );

        // store array of replacement words or phrases
        // make sure each replacement is in the same order
        // as the click bait word you're trying to replace

        $b = Array(
            "so-called scientists",
            "so-called doctors",
            "aren't threatened by",
            "average",
            "completely normal",
            "ineffective",
            "method",
            "is no different than the others",
            "you won't really be surprised by",
            "slightly improve",
            "boring",
            "normal" 
        );

        // use the str_replace function to replace the words
        // uppercase the first letter in every word using ucwords() function
        // store in a varible

        // $honestHeadline = str_replace($a, $b, $clickBait);
    }

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

    <h1>Honest Click Bait Headlines <br></h1>
    <p class="lead">
        Hate click bait? Turn those annoying headlines into realistic and honest one using simple program
    </p>

    <form class="col-sm-8 col-sm-offset-2" action="" method="post">

        <textarea placeholder="Paste click bait headline here..." class="form-control input-md" name="clickbait_headline"></textarea> <br>

        <button type="submit" class="btn btn-primary btn-md pull-right" name="fix_submit">Make honest</button>
    </form>

    <?php 
        if(isset( $_POST["fix_submit"])) {
            echo $honestHeadline;
        }
    ?>
       
 
    </div>
    
<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>