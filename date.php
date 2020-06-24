<?php include 'header.php'?>
    <?php
    $datenow=getdate();
    echo "date ".$datenow['mday']."<br>";
    echo "month ".$datenow['mon']."<br>";
    echo "year ".$datenow['year']."<br>";
    echo date("m/d/y G.i:s<br>",time())."<br>";
    echo date("j of F Y,\a\\t g.i a", time())."<br>";



    ?>
<?php require 'footer.php'?>