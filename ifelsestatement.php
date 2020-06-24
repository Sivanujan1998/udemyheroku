<?php include 'header.php'?>
<?php
echo "<h2>If statement</h2>";
$grade=80;
if($grade>=50){
    echo"<h3 style ='color:green'>YOU HAVE PASSED</h3>";
}else{
    echo"<h3 style ='color:red'>YOU HAVE FAILED</h3>";
}
$grade ="C";
if($grade=='A'){
    echo "<h2 style ='color:green'>YOU ARE SUPERSTAR!</h2>";
}
elseif($grade=='B'){
    echo "<h2 style ='color:blue'>YOU DID WELL!</h2>";
}else{
    echo "<h2 style ='color:red'>YOU ARE FAILED!</h2>";
}
?>
<?php require 'footer.php'?>