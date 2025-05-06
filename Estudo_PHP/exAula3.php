<?php

define("min", 17); //constante com nome "min" de valor 17
define("max", 45); //constante com nome "max" de valor 45

$idade = 25;

echo "MIN: " . min . "<br>";
echo "MAX: " . max . "<br>";
echo "Idade: " . $idade . "<br><br>";

if($idade >= min && $idade <= max){
    echo "Idade maior que o minimo.<br>Acesso liberado!";
}else{
    echo "Idade menor que o minimo.<br>Acesso bloqueado!";
}

echo "<br>versão do PHP: " . PHP_VERSION;
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>Constantes</title>
        <meta charset="utf-8" />
    </head>
