<?php 
header("Content-Type: text/html; charset=UTF-8");
    $numero = $_POST['numero'];
    $arredondado_para_cima = ceil($numero);
    $arredondado_para_baixo = floor($numero);
    $arredondado_normal = round($numero);
    
    echo "Número original: $numero<br>";
    echo "Arredondado para cima: $arredondado_para_cima<br>";
    echo "Arredondado para baixo: $arredondado_para_baixo<br>";
    echo "Arredondado normalmente: $arredondado_normal<br>";