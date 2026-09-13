<?php
header("Content-Type: text/html; charset=UTF-8");
    $numero = $_POST['numero'];
    while ($numero >= 1) {
        echo "Número: $numero<br>";
        $numero--;
    }