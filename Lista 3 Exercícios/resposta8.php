<?php 
header("Content-Type: text/html; charset=UTF-8");
    $frase = $_POST['frase'];
    $totalVogais = preg_match_all('/[aeiouAEIOU]/', $frase);
    echo "A frase '$frase' contém $totalVogais vogais.";