<?php
require("conexion.php");

$con=new Conexion();
function getArticulo($conexion){
    $diccionario=$conexion->conexion->query("SELECT * FROM articulo");
    return $diccionario->fetch_assoc();
}
function getFoto($conexion){
    $diccionario2=$conexion->conexion->query("SELECT * FROM foto");
    return $diccionario2->fetch_assoc();
}
function getEmpresaF($conexion){
    $diccionario3=$conexion->conexion->query("SELECT * FROM empresa");
    return $diccionario3->fetch_assoc();
}





$diccionario=array(
    'titulo' => 'WUEE SALE EL TEXTO LOCO',
    'contenido' => 'EHHH SALE EL CONTENIDO',
    'url' => 'GOOGLE'

);

$diccionario2=array(
    'titulo' => 'OTRO PAGINA LOCOOO WUEEE',
    'foto' => 'https://www.google.com/search?q=php&rlz=1C1GCEU_esES866ES866&sxsrf=ACYBGNSuPqWg3iRZymndu0BsqGym8wlR7g:1570011912356&tbm=isch&source=iu&ictx=1&fir=XTO7ngnkIubMrM%253A%252CPkrl-TnSBsDloM%252C%252Fm%252F060kv&vet=1&usg=AI4_-kTm8lO-vC-psbNevpii3mcT3K4qIg&sa=X&ved=2ahUKEwj3ztCSrv3kAhWMx4UKHTDHCAQQ_B0wGXoECAkQAw#imgrc=XTO7ngnkIubMrM:',
    'enlace_foto' => 'www.google.com'
);


?>