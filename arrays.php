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


    <?php 
//   ASSOCIATIVE ARRAY
            $people = Array(
                        "userName"  => "john_doe",
                        "fullName"  => "John Doe",
                        "Age"       => 35,
                        "Gender"    => "Male",
                        "Country"   => "Mexico"
            );
        

            // ECO VALUES OF THE ARRAY 
                echo $people["userName"] ."<br>";
                echo $people["fullName"] ."<br>";
                echo $people["Age"]      ."<br>";
                echo $people["Gender"]   ."<br>";
                echo $people["Country"]  ."<br> <br>";

            // MULTI-DIMENSIONAL ARRAY 
            
            $employees = Array(
                Array( // index 0
                        "userName"  => "john_doe",
                        "fullName"  => "John Doe",
                        "Age"       => 35,
                        "Gender"    => "Male",
                        "Country"   => "Mexico"
                    ),
                    Array( // index 1
                        "userName"  => "jane_doe",
                        "fullName"  => "Jane Doe",
                        "Age"       => 27,
                        "Gender"    => "Female",
                        "Country"   => "Canada"
                    ),
                    Array()
            );

        // ECHO THE VALUES OF MULTI-DIMENSIONAL ARRAY
            echo $employees[0]["fullName"] ."<br>"; 
            echo $employees[0]["Age"] ."<br> <br>"; 
            echo $employees[1]["fullName"] ."<br>";
            echo $employees[1]["Age"] ."<br>";

    ?>


<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>