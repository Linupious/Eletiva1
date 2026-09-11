<?php
    $raio = $_POST['raio'];
    $area = pi() * pow($raio, 2);
    echo "<p>A área do círculo é: " . number_format($area, 2) . "</p>";