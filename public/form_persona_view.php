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

</header>

<form action="form_persona_view.php" method="POST" enctype="multipart/form-data">
    Nom: <input type="text" required name="nombre"><br>
    Data naixement : <input type="date" > <br>
    Sexe:<br> <input type="checkbox" id="opcion1" name="hombre" value="hombre">
    <label for="opcion1"> Hombre</label><br>
    <input type="checkbox" id="opcion2" name="mujer" value="mujer">
    <label for="opcion2">Mujer</label><br>
    <input type="checkbox" id="opcion3" name="hombre" value="otro">
    <label for="opcion3"> Otro..</label><br>
    <select id="hobbies" name="hobbies">
        <?php
        $hobbies = array('Pescar', 'Escalar', 'Correr','Pasear','Videojuegos');
        foreach ($hobbies as $hobby){
        ?> <option value=<?=$hobby?>><?=$hobby?></option>
        <?php }?>
    </select><br>
    Escoja un fichero<br>
    <input type="file" name="fichero"><br>
    <input type="submit" value="Subir fichero"><br>


    <input type="submit">

</form>

</body>

</html>





