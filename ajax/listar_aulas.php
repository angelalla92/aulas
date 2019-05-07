<?php
require_once '../app/model/aulas.php';
require_once '../app/model/conexcion.php';


$objeto = new Aulas();
$objetito = $objeto->listar_aulas();
echo $objetito; 

?>