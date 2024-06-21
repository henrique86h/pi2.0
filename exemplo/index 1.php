<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PÁGINA INICIAL</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<?php
// Inclui o arquivo de conexão com o banco de dados
include "conexao.php";

// Função para escapar strings
function safe($conexao, $str) {
    return mysqli_real_escape_string($conexao, $str);
}

?>

<h1> Jogos de Animes </h1>

<div class="cards-container">
    <?php
    // Consulta SQL para buscar jogos de anime
    $sql_anime = "SELECT * FROM tb_jogos WHERE categoria = 'anime' ORDER BY id DESC";
    $resultado_anime = mysqli_query($conexao, $sql_anime);

    // Verifica se há resultados
    if (mysqli_num_rows($resultado_anime) > 0) {
        while ($produto = mysqli_fetch_assoc($resultado_anime)) {
    ?>
        <div class="card">
            <img src="imagem/<?= safe($conexao, $produto['imagem']); ?>" alt="Imagem 1">
            <div class="card-content">
                <h3><?= safe($conexao, $produto['titulo']); ?></h3>
                <p><?= safe($conexao, $produto['descricao']); ?></p>
                <a href="<?= safe($conexao, $produto['link']); ?>"> Adquira Agora </a>
            </div>
        </div>
    <?php
        }
    } else {
        echo "<p>Nenhum jogo de anime encontrado.</p>";
    }
    ?>
</div>

<h1> Jogos Clássicos </h1>

<div class="cards-container">
    <?php
    // Consulta SQL para buscar jogos clássicos
    $sql_classicos = "SELECT * FROM tb_jogos WHERE categoria = 'classicos' ORDER BY id DESC";
    $resultado_classicos = mysqli_query($conexao, $sql_classicos);

    // Verifica se há resultados
    if (mysqli_num_rows($resultado_classicos) > 0) {
        while ($produto = mysqli_fetch_assoc($resultado_classicos)) {
    ?>
        <div class="card">
            <img src="imagem/<?= safe($conexao, $produto['imagem']); ?>" alt="Imagem 2">
            <div class="card-content">
                <h3><?= safe($conexao, $produto['titulo']); ?></h3>
                <p><?= safe($conexao, $produto['descricao']); ?></p>
                <a href="<?= safe($conexao, $produto['link']); ?>"> Adquira Agora </a>
            </div>
        </div>
    <?php
        }
    } else {
        echo "<p>Nenhum jogo clássico encontrado.</p>";
    }
    ?>
</div>

<?php
// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>

</body>
</html>
