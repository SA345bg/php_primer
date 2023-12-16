<?php 
    $title = "String Manipulation";
    include 'includes/header.php'; 

?>
    <?php 
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        echo $phrase1;
        echo $phrase2;
        echo '<br/>';

        //Concatenation of strings = joining two strings
        echo $phrase1 . $phrase2;
        echo '<br/>';

        echo $phrase1 . " " . $phrase2;
        echo '<br/>';

        echo $phrase1 . ", named Tiffany, " . $phrase2;
        echo '<br/>';
        echo '<hr/>';

        $name = "stamen aleksandrov";
        //String transformation
        echo 'Uppercase first letter: '.ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: '.ucwords($name).'<br/>';
        echo 'Upper case: '.strtoupper($name).'<br/>';
        echo 'Lower case: '.strtolower($name).'<br/>';
        echo 'Lower case: '.strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';

        echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
        echo 'Repeat String: ' . str_repeat($name,10) . '<br/>';
        echo 'Repeat String: ' . str_repeat('A',10) . '<br/>';
        echo 'Repeat String: ' . strtoupper(str_repeat('a',10)) . '<br/>';
        echo '<hr/>';

        // Start from the 6th character of $name and get 10 characters after, i. e. cut first 5 characters and print the following 10 characters
        echo 'Get a Substring: ' . substr($name,5,10) . '<br/>';
        echo 'Get a Substring: ' . substr($name,3,5) . '<br/>';
        echo '<hr/>';

        // First position in an array starts from 0!
        echo 'Get position of character in string: ' . strpos($name, 'k') . '<br/>';
        echo '<hr/>';

        // Start printing a string from a given character
        echo 'Find character "m" in a string: ' .strchr($name, 'm') . '<br/>';
        // Without to find such character in $name, i. e. upper M
        echo 'Find character "M" in a string: ' .strchr($name, 'M') . '<br/>';
        echo '<hr/>';

        echo 'Find a lenght of a string: ' .strlen($name) . '<br/>';
        echo '<hr/>';

        //Trim
        echo 'Without trim: ' . "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: ' . "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: ' . "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: ' . "A" . rtrim(" B C D ") . "E" . '<br/>';
        echo '<hr/>';

        // str_replace(what existing string to replace, with what new string, where to find what to be replaced)
        echo 'Replace string with another: ' . str_replace("stand", "sit", $phrase2) . '<br/>';
    ?>
<?php require 'includes/footer.php'; ?>