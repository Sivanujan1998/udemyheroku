<?php include 'header.php'?>
    <?php
    $pharse1="student who came late";
    $pharse2="in class, stand with rock";
    $name="trevoir williams";
    echo $pharse1." , named Tiffany, ".$pharse2;
    echo '<br/>';
    echo "<hr/>";

    echo 'Upper case first letter: '.ucfirst($name).'<br/>';
    echo 'Upper case first letter of each word: '.ucwords($name).'<br/>';
    echo 'Upper case : '.strtoupper($name).'<br/>';
    echo 'lower case : '.strtolower($name).'<br/>';
    echo "<hr/>";
    echo 'repeat string: '.str_repeat('a',10).'<br/>';
    echo 'repeat string - nested function: '.strtoupper(str_repeat('a',10)).'<br/>';
    echo 'get a sub string: '.substr($name,3,6).'<br/>';
    echo 'get position string: '.strpos($name,'w').'<br/>';

    echo 'Find character "R": '.strchr($name,'R').'<br/>';
    echo 'Find character "r": '.strchr($name,'r').'<br/>';
    echo 'Find character "s": '.strchr($name,'s').'<br/>';
    echo 'Find character "e": '.strchr($name,'e').'<br/>';

    echo 'Find length of string: '.strlen($name).'<br/>';

    echo 'with out trim'. "A"  ."B C D". "E".'<br/>';
    echo 'trim spaces both sides'. "A"  .trim("B C D"). "E".'<br/>';
    echo 'trim spaces left sides'. "A"  .ltrim("B C D"). "E".'<br/>';
    echo 'trim spaces right sides'. "A"  .rtrim("B C D"). "E".'<br/>';

    echo 'Replace string with another: '.str_replace("stand","sit",$pharse2).'<br/>';
   
    ?>
<?php require 'footer.php'?>