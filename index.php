
<?php include 'header.php'?>
    <h1>Hello Html - PHP Primer</h1>
    <br/>
    <?php
    echo "Hello PHP!";
    echo "<br/>";
    echo "second line";
    echo "<br/>";
    ?>
    <?php
    $name="Sivanujan Sachchithanantham";
    $age=21;
    echo $name;
    echo "<h1>My Name is :".$name."</h1>";
    echo "<h1>My age is :".$age."</h1>";

    echo "<h1>My Name is :$name </h1>";
    ?>

<?php require 'footer.php'?>