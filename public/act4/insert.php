<?php

function insert($nombreTable, $array){
    $formato = 'insert into %s ("%s") values ("%s")';
    $array_key = implode("\",\"", array_keys($array));
    $array_values = implode("\",\"", $array);
    echo sprintf($formato,$nombreTable,$array_key,$array_values);
}

require_once ("insert.view.php");