<?php 
    $title = "Index";
    include 'includes/header.php'; 

?>
    <!-- Basic HTML -->
    <h1>Hello, World! - PHP Primer</h1>
    <br/>
    <?php 
        // Printing php-code to HTML-page using echo
        /* 
        Multiline comment 
        */
        echo 'Hello, PHP!';
        // Print <br/> or generate a space between two lines. 
        echo '<br/>';
        echo 'Second line';
        echo '<br/>';

        // On one line!
        echo 'Hello, PHP - again!';
        echo 'Second line - again';
        echo '<br/>';
    
        // Declare a variable /begins with $/
        $name = 'Stamen Aleksandrov';
        $age = 45;
        // Print variable
        echo $name;

        // Concatenation with full-stop mark . before and after the variable ['static-content'.$dymamic-content.'static-content'] - single quotations '...'
        echo '<h1>My name is: '.$name.'!</h1>';
        echo '<h1>My age is: '.$age.'!</h1>';

        // Double quotations "..."
        echo "<h1>My name is: $name!</h1>"
    ?>

    <button type="button" class="btn btn-dark">CLICK ME!</button>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <button type="button" class="btn btn-danger">CLICK ME!</button>
    <button type="button" class="btn btn-warning">CLICK ME!</button>

<?php require 'includes/footer.php'; ?>
