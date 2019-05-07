<?php
if(isset($_GET['url'])){
    $view=$_GET['url'];
    switch ($view) {
        case 'home': 
        include './app/view/home.php';
        break;
        case 'home2': 
        include '../ajax/listar_aulas.php';
        break;

        default:
        echo "ERROR 404";
    }
}else{
   echo "<a href='./home'>home</a><br>";
echo "<a href='./home2'>home2</a><br>";
   
}
