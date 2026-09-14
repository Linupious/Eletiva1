<?php
header("Content-Type: text/html; charset=UTF-8");
    $frase = $_POST['frase'];
    $numero_de_palavras = str_word_count($frase);
    $maior_palavra = '';
    $palavras = explode(' ', $frase);
    foreach ($palavras as $palavra) {
        if (strlen($palavra) > strlen($maior_palavra)) {
            $maior_palavra = $palavra;
        }
    }
    
    echo "A frase '$frase' contém $numero_de_palavras palavras.<br>";
    echo "A maior palavra na frase é: '$maior_palavra'.";