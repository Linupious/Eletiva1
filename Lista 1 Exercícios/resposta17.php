<?php
header('Content-Type: text/html; charset=utf-8');
    $capital = $_POST['capital'];
    $taxa = $_POST['taxa'];
    $tempo = $_POST['tempo'];
    $montante = $capital * pow((1 + ($taxa / 100)), $tempo);
    echo "<p>O montante final é: $montante</p>";