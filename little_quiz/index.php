<?php 
session_start();
include "perguntas.php";

//inicializando
if (!isset($_SESSION['index'])) {
    $_SESSION['index'] = 0;
    $_SESSION['pontos'] = 0;
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $acao = $_POST["acao"] ?? "";

    if($acao === "responder"){
     $resposta = $_POST["resposta"] ?? "";
     $index = $_SESSION['index'];
     $correta = $perguntas[$index][2];
    

    if($resposta === $correta){
        $_SESSION['pontos']++;
        $mensagem = "<p>✅ Correto!</p>";
    } else {
        $mensagem = "<p>❌ Errado!<br>A resposta correta era: <b>$correta</b></p>";
    }

    echo '<!doctype html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Resultado</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <input type="checkbox" id="toggle" />
        <label for="toggle" class="toggle-btn"></label>
        <div class="container">
            ' . $mensagem . '
            <form method="post">
                <input type="hidden" name="acao" value="proxima">
                <button class="proxima" type="submit">Próxima pergunta</button>
            </form>
        </div>
    </body>
    </html>';
    exit;

    }

    if($acao === "proxima"){
        $_SESSION['index']++;
        header("Location: index.php");
        exit;
    }
}

if($_SESSION['index'] >= count($perguntas)){
    echo "<p> Fim do jogo! Pontuação: {$_SESSION['pontos']}/" . count($perguntas) . "</p>";
    session_destroy();
    echo '<a class= "reiniciar" href= "index.php"> Jogar novamente?</a>';
    echo '<link rel= "stylesheet" href= "style.css"';
    exit;

}

$index = $_SESSION['index'];
$pergunta = $perguntas[$index][0];
$alternativas = $perguntas[$index][1];
?>

<!doctype html>
<html lang= "pt-br">
<head>
    <meta charset="utf-8">
 
    <title>Little Quiz</title>
    <link rel= "stylesheet" href= "style.css">
</head>
<body>
<input type="checkbox" id="toggle" />
<label for="toggle" class="toggle-btn"></label>

    <div class= "container">
        <h2><?php echo $pergunta; ?></h2>
        <form method= "post">
            <input type= "hidden" name= "acao" value= "responder">
            <?php foreach ($alternativas as $alt): ?>
                <button class= "resposta" type= "submit" name= "resposta" value= "<?php echo $alt; ?>">
                    <?php echo $alt; ?>
                </button>
            <?php endforeach; ?>
        </form>
    </div>
</body>
</html>
