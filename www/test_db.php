<?php

$link = mysqli_connect('database', 'root', 'mysql',null);

if (!$link) {
    echo "Erro: Incapaz de conectar no MySQL." . PHP_EOL;
    echo "Depurando errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Depurando error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Sucesso: Uma conexão adequada com o MySQL foi feita! O banco de dados do docker é ótimo." . PHP_EOL;

mysqli_close($link);
?>