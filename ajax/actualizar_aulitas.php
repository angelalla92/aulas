<?php
require_once '../app/model/conexcion.php';
require_once '../app/model/aulas.php';
// print_r($_POST);
$vactuadora = new Aulas();
$objetoactuadora=$vactuadora->actualizar_aulas($_POST['aulan'],$_POST['capan'],$_POST['tsillan'],$_POST['tipen'],$_POST['tabureten'],$_POST['pizan'],$_POST['pron'],$_POST['pcai'],$_POST['pcdi'],$_POST['puertasn'],$_POST['venn'],$_POST['obsen'],$_POST['estan'],$_POST['idn']);
echo $objetoactuadora;

?>