<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $resposta = $_POST["resposta"] ?? "";

    switch($resposta){
        case 'a':
            echo "<p>Resposta errada!</p>";
            break;
        case 'b':
            echo "<p>Resposta errada!</p>";
            break;
        case 'c':
            echo "<p>Resposta correta!!</p>";
            break;
        case 'd':
            echo "<p>Resposta errada!</p>";
            break;
        default:
            echo "<p>Escolha inválida</p>";
    }
    echo '<br><a href="geladeira.php">Tentar novamente</a>';
} else {
    ?>
    <style>
        .meu-botao {
            width: 160px;
            background-color:rgb(170, 241, 148); /* Verde */
            color: black; /* Texto branco */
            padding:15px 32px; /* Espaçamento interno */
            text-align: center; /* Centraliza o texto */
            text-decoration: none; /* Remove sublinhado */
            display:inline-flex; /* Permite definir largura e altura */
            font-size: 16px; /* Tamanho da fonte */
            margin: 4px 2px; /* Margem */
            cursor: pointer; /* Muda o cursor ao passar o mouse */
            border: none; /* Remove borda */
            border-radius: 4px; /* Bordas arredondadas */
        }
    </style>
    <h2>Pergunta: Qual a capital de Portugal?</h2>
    <form method= "post" action= "geladeira.php">

        <button class="meu-botao" type= "submit" name= "resposta" value= "a">a) Porto</button><br><br>
        <button class="meu-botao" type= "submit" name= "resposta" value= "b">b) Madrid</button><br><br>
        <button class="meu-botao" type= "submit" name= "resposta" value= "c">c) Lisboa</button><br><br>
        <button class="meu-botao" type= "submit" name= "resposta" value= "d">d) Barcelona</button><br><br>
        
    </form>
    <?php
}
?>