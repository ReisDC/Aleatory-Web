<?php
// Verifica se há uma escolha enviada pelo usuário
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $resposta = $_POST["resposta"] ?? "";

    switch ($resposta) {
        case "a":
            echo "<p>Você escolheu A. Errado!</p>";
            break;
        case "b":
            echo "<p>Você escolheu B. Correto!</p>";
            break;
        case "c":
            echo "<p>Você escolheu C. Errado!</p>";
            break;
        default:
            echo "<p>Escolha inválida!</p>";
    }

    echo '<br><a href="pergunta.php">Tentar de novo</a>';
} else {
    // Mostra a pergunta com botões se ainda não respondeu
    ?>
    <h2>Pergunta: Qual a capital da França?</h2>
    <form method="post" action="pergunta.php">
        <button type="submit" name="resposta" value="a">a) Londres</button><br><br>
        <button type="submit" name="resposta" value="b">b) Paris</button><br><br>
        <button type="submit" name="resposta" value="c">c) Roma</button>
    </form>
    <?php
}
?>
