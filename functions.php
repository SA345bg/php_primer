<?php 
    $title = "Functions";
    include 'includes/header.php'; 

?>
    <h1><?php echo $title; ?></h1>

    <?php 
        /* Defining a Function */
        function writeMessage() {
            echo "Have a nice time! <br/>";
        }

        /* Calling a Function */
        writeMessage();
        echo "<hr/>";
        writeMessage();
        echo "<hr/>";
        writeMessage();

        echo "<br/>";

        function addFunction($num1, $num2) {
            $num2 += 1;
            $sum = $num1 + $num2;            
            echo "The sum os $num1 and $num2 is $sum. <br/>";
        };

        addFunction(10, 20);
        $num = 500;
        addFunction(10, $num);
        addFunction(10, 50);

        /* Pass by Reference - use ampersand & in parameter to modify a variable in the function */
        // &$num -> & means modify the original value of $num
        function changeNum(&$num) {
            $num = $num + 10;
            // $ num += 10
        };

        changeNum($num);
        // Show the modified value
        echo $num . '<br/>';

        /* Return in Function */
        function returnProduct($num1, $num2) {
            $prod = $num1 * $num2;
            return $prod;
        };

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>';
        
    ?>
<?php require 'includes/footer.php'; ?>