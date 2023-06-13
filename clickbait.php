<?php 
    // CONSTANTS
    define("TITLE", "Honest clickbait Headlines"); 
    include("functions.php");

    if(isset($_POST["fix_submit"])) {
        // call function
        checkForClickBait();
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

    <div class="row">
        <form class="col-sm-8 col-sm-offset-2" action="" method="post">
            <textarea placeholder="Paste click bait headline here..." class="form-control input-md" name="clickBait_headline"></textarea> <br>
            <button type="submit" class="btn btn-primary btn-md pull-right" name="fix_submit">Make honest</button>
        </form>
    </div>
    <br>
   
    <?php 
        if(isset( $_POST["fix_submit"])) {
            // get first value returned by checkForClickBait function and store it in variable
            $clickBait = checkForClickBait()[0];

             // get first value returned by checkForClickBait function and store it in variab
            $honestHeadline = checkForClickBait()[1];

            // call function add two arguments
            displayHonestHeadline($clickBait, $honestHeadline);
        }
    ?>
       
 
    </div>
    
<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>