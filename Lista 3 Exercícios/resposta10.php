<?php 
header("Content-Type: text/html; charset=UTF-8");
    $nome = $_POST['nome'];
    $iniciais = '';
    $palavras = explode(' ', $nome);
    foreach ($palavras as $palavra) {
        $iniciais .= substr($palavra, 0, 1);
    }
    echo "As iniciais do nome '$nome' são: $iniciais";