<?php
    $temp = $_POST['temp'];
    $temp_fahrenheit = ($temp * 9/5) + 32;
    echo "<p>Temperatura em Fahrenheit: $temp_fahrenheit °F</p>";