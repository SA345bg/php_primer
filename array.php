<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php'; 

?>
    <!-- <h1>Arrays</h1> -->
    <h1><?php echo $title; ?></h1>

    <?php 
        // A variable
        $num = 3;

        // An array
        // Only one datatype
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        // Print value 6 in array, i. e. with index 5 [You can access the value in the subscript of an array using the index.]
        echo $numbers[5];

        // Index is from 0 to (n-1), i. e. for last item of the array index is 10-1 = 9.
        echo "<p>$numbers[9]</p>";

        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 72, 99, 303, 67, 945, 98, 0, 5);

        // Find the number of the items in the array
        $size = count($numbers);
        echo "<p>Array numbers size is: $size</p>";

        // Print all values of the array
        for ($count=0; $count < $size; $count++) {
            echo "<p>$numbers[$count]</p>";
        }
    ?>
<?php require 'includes/footer.php'; ?>