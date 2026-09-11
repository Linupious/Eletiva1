<?php
header('Content-Type: text/html; charset=utf-8');
    $largura = $_POST['largura'];
    $altura = $_POST['altura']; 
    $perimetro = 2 * ($largura + $altura);
    echo "<p>O perímetro do retângulo é: $perimetro</p>";