<?php
require_once '../app/modal/conexcion.php';
require_once '../app/modal/aulas.php';

$vpeliminarajax = new Aulas();
$objetitoeliminado=$vpeliminarajax->eliminando();
echo $objetitoeliminado;
?>