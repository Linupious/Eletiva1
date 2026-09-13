<?php
header("Content-Type: text/html; charset=UTF-8");
    $numero = $_POST['numero'];
    echo "Tabuada de $numero de 1 a 10:<br>";
    for ($i = 1; $i <= 10; $i++){
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }