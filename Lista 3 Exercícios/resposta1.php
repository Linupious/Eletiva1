<?php
header("Content-Type: text/html; charset=UTF-8");
    $palavra = $_POST['palavra'];
    $tamanho = mb_strlen($palavra, 'UTF-8');
    echo "A palavra '$palavra' tem $tamanho caracteres.";