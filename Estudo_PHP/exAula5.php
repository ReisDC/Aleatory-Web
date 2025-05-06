<?php
// Switch

$dia = 5;
$msg = "";

switch (7){
    case '1':
        $msg = "dia 1";
        break;
    case '2':
        $msg = "dia 2";
        break;
    case '3':
        $msg = "dia 3";
        break;
    case '4':
        $msg = "dia 4";
        break;
    case '5':
        $msg = "dia 5";
        break;
    case '6':
        $msg = "dia 6";
        break;
    default:
    $msg = "Dia não encontrado";
}
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>switch</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <p>Olá, hoje é o <?= $msg; ?></p>
    </body>
</html>