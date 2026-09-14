<?php
header("Content-Type: text/html; charset=UTF-8");
    $email = $_POST['email'];
    $dominio = substr(strrchr($email, "@"), 1);
    echo "O domínio do e-mail '$email' é: $dominio";