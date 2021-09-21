<?php

function contrasenyaSegura($cadena){
    $mayus = preg_match('@[A-Z]@', $cadena);
    $minus = preg_match('@[a-z]@', $cadena);
    $number    = preg_match('@[0-9]@', $cadena);
    $caracteres = preg_match('`[[:punct:]]`',$cadena);
    if (!$cadena){
        echo "Contraseña vacía";
    }elseif (strlen($cadena) < 8){
        echo "Mínimo 8 caracteres";
    } else if (!$mayus){
        echo "Falta una mayúscula";
    }else if (!$minus){
        echo "Falta una mínuscula";
    }else if (!$number){
        echo "Falta un dígito";
    }elseif(!$caracteres) {
        echo "Falta un dels caracters especials {-_=*+$@#}";
    }else{
        echo "Contraseña aceptada";
    }
}

require_once ("funcions.view.php");
