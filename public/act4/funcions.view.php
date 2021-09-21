<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        header{
            background-color: yellow;
            padding: 2em;
        }
    </style>
</head>
<body>
<header>
    <h2>
        <?php

        $contraseña = $_GET['i'];

        contrasenyaSegura($contraseña);



        ?>
    </h2>

</header>

</body>

</html>





