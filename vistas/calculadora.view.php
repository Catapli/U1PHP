<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        header{
            background-color: gray;
            padding: 2em;
        }
    </style>
</head>
<body>
<header>
    <h2>
        <?php
        $x = $_GET['x'];

        $y = $_GET['y'];
        print_r($_GET);
        echo "<br>";
        echo 'suma='.$x + $y;
        echo "<br>";
        echo 'resta='.$x - $y;
        echo "<br>";
        echo 'multiplicacion='.$x * $y;
        echo "<br>";
        echo 'division='.$x / $y;
        echo "<br>";
        ?>
    </h2>

</header>

<?php
print_r($_SERVER["SERVER_ADDR"]."<br>");
print_r($_SERVER["QUERY_STRING"]."<br>");
print_r($_SERVER["SCRIPT_FILENAME"]);
?>
</body>

</html>





