<?php include 'header.php'?>
<h1>ARRAYS</h1>
    <?php
   $num=3;
   $numbers=array(1,2,3,4,5,6,9,101,89,56,23,56,2,700,10,2,44,4444,50);
   echo $numbers[5];
   echo"<p> $numbers[9]</p>";
   $size=count($numbers);
   echo "<p>Array Numbers is size :$size</p>";
   for($count=0;$count<$size;$count++){
       echo "<p>$numbers[$count]</p>";
   }

    ?>
<?php require 'footer.php'?>