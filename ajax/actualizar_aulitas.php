<?php
require_once '../app/model/conexcion.php';
require_once '../app/model/aulas.php';

$vactuadora = new Aulas();
$objetoactuadora=$vactuadora->actualizar_aulas($_post['idi'],$_post['aulai'],$_post['capai'],$_post['tsillai'],$_post['tipei'],$_post['taburetei'],$_post['pizi'],$_post['proi'],$_post['pcai'],$_post['pcdi'],$_post['puertasi'],$_post['veni'],$_post['obsei'],$_post['estai']);
echo $objetoactuadora;

?>