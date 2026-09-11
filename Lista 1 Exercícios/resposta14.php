<?php
header('Content-Type: text/html; charset=utf-8');
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso / ($altura * $altura);
    echo "<p>Seu IMC é: $imc</p>";