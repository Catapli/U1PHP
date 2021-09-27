<?php
require_once("formularis.view.php");

$operador1 = $operador2 = $operador = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $operador1 = $_POST['operador1'];
    $operador2 = $_POST['operador2'];
    $operador =$_POST['operacion'];
    calcular($operador1,$operador2,$operador);
}


function suma($x, $y){
    return $x + $y;
}

function resta ($x, $y){
    return $x - $y;
}

function multiplicacion($x,$y){
    return $x*$y;
}

function division($x,$y){
    return $x/$y;
}

function calcular($x,$y,$function){
    if (!$function){
        echo "La variable funcion esta vacía";
    }elseif ($function == "suma"){
        echo 'suma='.suma($x,$y) ;
    }elseif ($function == "resta"){
        echo 'resta='.resta($x,$y);
    }elseif ($function == "multiplicar"){
        echo 'multiplicacion='.multiplicacion($x,$y);
    }elseif ($function == "dividir"){
        echo 'division='.division($x,$y);
    }else{
        echo "La variable funcion no coincide con ninguna";
    }
}



