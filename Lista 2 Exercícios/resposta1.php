<?php
header("Content-Type: text/html; charset=UTF-8");
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $soma = $n1 + $n2;
    echo "A soma de $n1 e $n2 é: $soma";
    if ($n1 == $n2){
        $triplo_soma = $soma * 3;
        echo "<br>Como os números são iguais, o triplo da soma é: $triplo_soma";
    }