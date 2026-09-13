<?php
header("Content-Type: text/html; charset=UTF-8");

    $valor_produto = $_POST['valor_produto'];
    if ($valor_produto <= 100){
        echo "Produtos até R$100 não ganham desconto!! <br>";
        echo "O valor do produto é: R$ $valor_produto <br>";
    }
    if($valor_produto > 100){
        $desconto = $valor_produto * 0.15;
        $valor_final = $valor_produto - $desconto;
        echo "Produtos acima de R$100 ganham desconto de 15%!! <br>";
        echo "O valor final do produto com desconto é: R$ $valor_final";
    }