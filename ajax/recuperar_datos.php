<?php
require_once '../app/model/conexcion.php';
require_once '../app/model/aulas.php';

$vparalistar = new aulas();
$objetolistador=$vparalistar->listar_aulas_id($_POST['mas']);
echo $objetolistador;

?>