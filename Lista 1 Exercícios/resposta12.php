<?php
header('Content-Type: text/html; charset=utf-8');
    $metros = $_POST['metros'];
    $centimetros = $metros * 100;
    echo "<p>$metros metros equivalem a $centimetros centímetros.</p>";