<?php 
    $title = "While/Do-While Loops";
    include 'includes/header.php'; 

?>
    <h1>While Loop</h1>
    <?php 
        $grade = 0;
        // Infinite Loop -> Dangerous for a site
        // while($grade < 10) {
        //     echo '<p>I AM LESS THAN 10!</p>';
        // }

        //Pre-Condition Loop -> Checks first the condition and than execute the code of the while-loop
        while($grade < 10) {
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }

        echo 'EXIT LOOP!';


        $grade = 10;

        while($grade < 10) {
            echo '<p>I AM LESS THAN 10!</p>';
            $grade++;
        }

        echo '<p style="color: red">EXIT LOOP!</p>';

    ?>

    <h1>Do-While Loop</h1>

    <?php 
        // Post-Condition Loop [$grade = 10 -> code executes once by do-loop and stops by while-condition (because $grade is not less than 10), i. e. code executes at least once or more times if while-condition is true]
        do{
            echo '<p>I AM DO-WHILE LOOP</p>';
            $grade++;
        } while($grade < 10);

        echo '<p style="color: red">EXIT LOOP!</p>';
    ?>
<?php require 'includes/footer.php'; ?>