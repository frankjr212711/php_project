<?php 
    // CONSTANTS
    define("TITLE", "PHP Varibles & Constants"); 
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
        <h1><?php echo TITLE?></h1>
        <div class="btn btn-secondary">Registration</div>
    <br>
    <br>
    <br>
        <?php 

            $username = "john_doe";
            $fullName = "John Doe";
            $age = 35;
            $gender = "Male";
            $country = "Mexico";


            // ARRAY
            $user = Array(
                        "johndoe",
                        "John Doe",
                        32,
                        "Male",
                        "Mexico"
            );
            // echo $user;

            echo $user[0] ."<br>";
            echo $user[1] ."<br>";
            echo $user[2] ."<br>";
            echo $user[3] ."<br>";
            echo $user[4] ."<br>";
 
      
          
        
        ?>
    </div>
    













<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>