<?php
header("Content-Type: text/html; charset=UTF-8");
    $palavra1 = $_POST['palavra1'];
    $palavra2 = $_POST['palavra2'];
    
    if (strpos($palavra1, $palavra2) !== false) {
        echo "A segunda palavra '$palavra2' está contida na primeira palavra '$palavra1'.";
    } else {
        echo "A segunda palavra '$palavra2' não está contida na primeira palavra '$palavra1'.";
    }