<?php
header("Content-Type: text/html; charset=UTF-8");
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    if (!checkdate($mes, $dia, $ano)) {
        echo "Data inválida!";
    } else {
        echo "Data informada: $dia/$mes/$ano";
    }