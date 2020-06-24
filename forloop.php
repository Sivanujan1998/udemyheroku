<?php include 'header.php'?>
<h1>For loops </h1>
    <?php
     for($count=0;$count<10;$count++){
         echo '<p>HELLO WORLD</p>';
     }

     for($count=0;$count<10;$count++){
        echo "<p>The count is: $count</p>";
    }
    ?>
<?php require 'footer.php'?>