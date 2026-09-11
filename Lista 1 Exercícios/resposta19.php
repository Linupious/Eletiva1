<?php
header('Content-Type: text/html; charset=utf-8');
    $distancia = $_POST['distancia'];
    $tempo = $_POST['tempo'];
    $velocidade = ($distancia / $tempo) * 3.6;
    echo "<p>Velocidade Média: $velocidade km/h</p>";