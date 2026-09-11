<?php
header('Content-Type: text/html; charset=utf-8');
    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $area = $base * $altura;
    echo "<p>A área do retângulo é: $area</p>";