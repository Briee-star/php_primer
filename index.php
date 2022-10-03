<?php 
        $title = "Index";
        include "includes/header.php"

    ?>
    <!-- Basic HTML -->
    <h1>Hello HTML - PHP Primer</h1>
    <br?>
    <?php 
    //Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
     
        //declare variable
        $name = 'Brittany Gayle';
        $age = 25;
        //echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.'</h1>'; 
        echo '<h1>My age Is: '.$age.'</h1>'; 
        //Echo using double quotes and interpolation
        echo "<h1>My Name Is: $name </h1>";
    ?>
    <button type="button" class="btn btn-info">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <a href="https://www.heroku.com" target="blank" class="btn btn-danger">Heroku.com</a>
    
    <?php 
     require 'includes/footer.php'
    ?>
