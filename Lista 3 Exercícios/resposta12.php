<?php
header("Content-Type: text/html; charset=UTF-8");
    $letras = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeros = '0123456789';
    $caracteres = $letras . $numeros;
    $senha = $letras[mt_rand(0, strlen($letras) - 1)];
    $senha .= $numeros[mt_rand(0, strlen($numeros) - 1)];
    for ($i = 2; $i < 8; $i++) {
        $senha .= $caracteres[mt_rand(0, strlen($caracteres) - 1)];
    }
    echo "A senha gerada é: $senha";
