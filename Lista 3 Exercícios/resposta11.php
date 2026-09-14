<?php
header("Content-Type: text/html; charset=UTF-8");
    $valor = $_POST['valor'];
    $valor_formatado = number_format($valor, 2, ',', '.');
    echo "O valor formatado é: R$ $valor_formatado";