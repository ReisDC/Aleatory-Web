<?php
$adicao = 5 + 2;
$subtracao = 5 - 2;
$multiplicacao = 5 * 2;
$divisao = 5 / 2;
$divResto = 5 % 2; //para rodar isso: http://localhost/Teste2.php
?>  
<!doctype html>
<html lang="pt-br">
    <head>
        <title>Operadores matemáticos</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <p>5 + 2 = <?=$adicao?></p>
        <p>5 - 2 = <?=$subtracao?></p>
        <p>5 * 2 = <?=$multiplicacao?></p>
        <p>5 / 2 = <?=$divisao?></p>
        <p>5 % 2 = <?=$divResto?></p>
        <hr />
        <p><?=($adicao * $divisao)?></p>
    </body>
</html>