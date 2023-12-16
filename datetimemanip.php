<?php 
    $title = "Date and Time Manipulation";
    include 'includes/header.php'; 

?>
    <h1><?php echo $title; ?></h1>

    <?php 
        // getdate() returns an array -> to put an array in a string is not allowed in PHP and gives an error in: echo "<p>$datenow</p>";
        $datenow = getdate();
        echo "Today's date is: <br/>";
        // mday = day of the month
        echo $datenow['mday'] . '<br/>';
        // mon = month
        echo $datenow['mon'] . '<br/>';
        // year = year
        echo $datenow['year'] . '<br/>';

        echo "Today's date is: " . $datenow['mday'] . "/" . $datenow['mon'] . "/" . $datenow['year'] . '<br/>';

        // Time in unix value
        echo time() . '<br/>';;

        print date("m/d/y G.i:s <br/>", time()) . '<br/>';
        print date("d/m/y G.i:s <br/>", time()) . '<br/>';
        print "Today is: ";
        print date("j \o\\f F Y, \a\\t g.i a", time());
    ?>
<?php require 'includes/footer.php'; ?>