<?php
header('Content-Type: text/html; charset=utf-8');
    $dias = $_POST['dias'];
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    echo "<p>Horas: $horas</p>";
    echo "<p>Minutos: $minutos</p>";
    echo "<p>Segundos: $segundos</p>";