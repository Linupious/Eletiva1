<?php
header('Content-Type: text/html; charset=utf-8');
    $preco = $_POST['preco'];
    $desconto = $_POST['desconto'];
    $preco_com_desconto = $preco - $desconto;
    echo "<p>O preço com desconto é: $preco_com_desconto</p>";