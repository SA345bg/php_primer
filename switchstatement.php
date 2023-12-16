<?php 
    $title = "Switch Statements";
    include 'includes/header.php'; 

?>
    <h1>Switch Statements</h1>
    <?php 
        $grade = 'F';

        switch($grade) {
            case 'A': 
                echo '<h2 style="color: blue">YOU ARE A SUPERSTAR!</h2>';
                break;
            case 'B': 
                echo '<h2 style="color: yellow">YOU DID WELL!</h2>';
                break;
            // else = default - only in switch() {...}
            default: 
                echo '<h2 style="color: red">YOU HAVE FAILED...</h2>';
                break;
        }
    ?>
<?php require 'includes/footer.php'; ?>