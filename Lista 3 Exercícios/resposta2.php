<?php
header("Content-Type: text/html; charset=UTF-8");
    $palavra = $_POST['palavra'];
    $maiusculo = mb_strtoupper($palavra, 'UTF-8');
    $minusculo = mb_strtolower($palavra, 'UTF-8');
    
    echo "A palavra '$palavra' em maiúsculas é: $maiusculo<br>";
    echo "A palavra '$palavra' em minúsculas é: $minusculo";