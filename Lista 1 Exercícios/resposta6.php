<?php
    $temp = $_POST['temp'];
    $temp_celsius = ($temp - 32) * 5/9;
    echo "<p>Temperatura em Celsius: $temp_celsius °C</p>";