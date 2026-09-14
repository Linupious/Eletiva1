<?php 
header("Content-Type: text/html; charset=UTF-8");
    $frase = $_POST['frase'];
    $frase_sem_espacos_no_final = rtrim($frase);
    $frase_sem_espacos = str_replace(' ', '', $frase);

    echo "Frase original: '$frase'<br>";
    echo "Frase sem espaços no final: '$frase_sem_espacos_no_final'<br>";
    echo "Frase sem espaços: '$frase_sem_espacos'<br>";