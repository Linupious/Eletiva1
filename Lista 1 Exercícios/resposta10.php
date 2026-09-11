<?php
header('Content-Type: text/html; charset=utf-8');
    $raio = $_POST['raio'];
    $perimetro = 2 * pi() * $raio;
    echo "<p>O perímetro do círculo é: " . number_format($perimetro, 2) . "</p>";