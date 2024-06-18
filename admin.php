<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="henrique.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tiny5&display=swap" rel="stylesheet">
    <title>Admin - Juegos</title>
</head>
<body>
<main>
    <section class="container-admin">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Banner</th>
                    <th>Plataformas</th>
                    <th colspan= "3">Ações</th>
                </tr>
            </thead>
        
        <tbody>
            <?php
            include "conexao.php";
            $sql = "select * from tb_pi";
            $resultado = mysqli_query($conexao, $sql);
            
            while ($jogos = mysqli_fetch_assoc($resultado)):
            ?>

                <tr>
                    <td><?php echo $jogos['nome'] ?></td>
                    <td><?php echo $jogos['banner'] ?></td>
                    <td><?php echo $jogos['plataformas'] ?></td>
                    <td><a class="botao-editar" href="editar.php?id=<?php echo $produtos['id'] ?>">Editar</a></td>
                    <td>
                        <form>
                        <a href="excluir.php?id=<?php echo $produtos['id'] ?>">
                        <input type="button" class="botao-excluir" value="excluir">
                        </a>
                        </form>
                    </td>
                </tr>

                <?php
                endwhile;
                ?>

        </tbody>
        </table>
        <a class="botao-adicionar" href="adicionar.php">Adicionar Jogo</a>
        
    </section>
</main>   
</body>
</html>