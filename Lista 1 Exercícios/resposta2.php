<?php
header('Content-Type: text/html; charset=utf-8');
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$resultado_subtracao = $n1 - $n2;
echo "<p>Resultado da soma: $resultado_subtracao</p>";
?>