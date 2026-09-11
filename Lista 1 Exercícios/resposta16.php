<?php
header('Content-Type: text/html; charset=utf-8');
    $capital = $_POST['capital'];
    $taxa = $_POST['taxa'];
    $tempo = $_POST['tempo'];
    $juros = ($capital * $taxa * $tempo) / 100;
    echo "<p>Os juros simples são: $juros</p>";