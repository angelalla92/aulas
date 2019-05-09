<?php
require_once '../app/model/conexcion.php';
require_once '../app/model/aulas.php';

$vpeliminarajax = new Aulas();
$objetitoeliminado=$vpeliminarajax->eliminando($_POST['chau']);
echo $objetitoeliminado;

?>