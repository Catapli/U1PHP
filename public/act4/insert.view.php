<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        header{
            background-color: greenyellow;
            padding: 2em;
        }
    </style>
</head>
<body>
<header>
    <h2>
        <?php

        $nomTaula = "AlumnosAprobados";

        $arrayAsociatiu = array('Nombre' => 'Jordi',
            'Nota' => 8.5,
            'Edad' => 20);

        insert($nomTaula,$arrayAsociatiu);
        ?>
    </h2>

</header>

</body>

</html>





