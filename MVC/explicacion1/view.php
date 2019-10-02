<?php

function render($diccionario, $template){
$fichero = file_get_contents($template);

foreach ($diccionario as $resultado => $concreto) {
    $fichero = str_replace('{'.$resultado.'}',$concreto, $fichero);
// (BUSCO EN FICHERO, SUSTITUYE POR TAL, EN TAL VARIBALE)
}

echo $fichero;
}


?>