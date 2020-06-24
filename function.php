<?php include 'header.php'?>
    <h2>functions in php</h2><br/>
    <?php
    function add($num1,$num2){
    $sum=$num1 +$num2;
    $num2=$num2+1;
    echo "the sum of $num1 and $num2 is : $sum <br/>";
    }
    function change($num){
        $num=$num+10;
    }
    function returnpro($num1,$num2){
        $prod=$num1+$num2;
        return $prod;
    }

    $num=500;
    add(10,20);
    add(10,$num);
    add("10","50");
    change($num);
    echo "$num<br/> ";

    $ret=returnpro(10,200);
    echo $ret;

    ?>
<?php require 'footer.php'?>