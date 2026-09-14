<?php
header("Content-Type: text/html; charset=UTF-8");
    $palavra = trim($_POST['palavra']);
    $palavraNormalizada = strtolower($palavra);

    if ($palavraNormalizada == strrev($palavraNormalizada)) {
        echo "A palavra '$palavra' é um palíndromo.";
    } else {
        echo "A palavra '$palavra' não é um palíndromo.";
    }
