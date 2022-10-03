<?php 

$title = "Arrays and Printouts";
include 'includes/header.php' 

?>
    <h1><?php echo $title ?></h1>
    <?php
        //a variable
        $num = 3;

        // an array
        //Only one datatype being stored
        $numbers = array(1,2,3,4,5,6,7,8,9,104,34,21,6,7,8,43,5,88,999,33,22,11,55,45,322,98);
        //You can access the value in a subcript of the array using the index.
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array numbers is size: $size</p>";

        for($count = 0; $count < $size; $count++)
        {
            echo "<p>$numbers[$count]</P>";
        }
    ?>
    
<?php require 'includes/footer.php'?>