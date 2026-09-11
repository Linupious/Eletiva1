<?php
header('Content-Type: text/html; charset=utf-8');
    $raio = $_POST['raio'];
    $area = pi() * pow($raio, 2);
    echo "<p>A área do círculo é: " . number_format($area, 2) . "</p>";