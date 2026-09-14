<?php
header("Content-Type: text/html; charset=UTF-8");
    $palavra = $_POST['palavra'];
    $palavra_invertida = strrev($palavra);
    echo "A palavra '$palavra' invertida é: $palavra_invertida";