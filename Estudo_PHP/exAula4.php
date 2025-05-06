<?php
$idade = 18;
$acesso = True;
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title>IF</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php 
        if (($idade >= 18) && ($acesso)){
        ?>
        <h1 style='color:green'>Autorizado!</h1>
        <?php
        }else{
        ?>
        <h1 style='color:red'>Negado!</h1>
        <?php
        }
        ?>
    </body>
</html>