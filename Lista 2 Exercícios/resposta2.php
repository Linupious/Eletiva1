<?php
header("Content-Type: text/html; charset=UTF-8");
    $a = $_POST['a'];
    $b = $_POST['b'];
    if($a < $b){
        echo "A ordem crescente é: $a, $b";
    } 
    elseif ($a == $b){
        echo "<br>Os números são iguais: $a";
    }
    else {
        echo "A ordem crescente é: $b, $a";
    }
