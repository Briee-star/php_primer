<?php 

$title = "For Loop";
include 'includes/header.php' 

?>
    <H1>For Loops</h1>

    <?php
        //For Loops
        for($count = 0; $count < 10; $count++)
        {
            echo '<p>HELLO WORLD</php>';
        }

        for($count = 0; $count < 10; $count++)
        {
            echo "<p>The Count is: $count</p>";
        }
    ?>
    
<?php require 'includes/footer.php'?>