<?php
header('Content-Type: text/html; charset=utf-8');
    $base = $_POST['base'];
    $expoente = $_POST['expoente'];
    $resultado = pow($base, $expoente);
    echo "<p>O resultado de $base elevado a $expoente é: $resultado</p>";