<?php
header('Content-Type: text/html; charset=utf-8');
    $km = $_POST['km'];
    $milhas = $km * 0.621371;
    echo "<p>$km quilômetros equivalem a $milhas milhas.</p>";