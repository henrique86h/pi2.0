<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="henrique.css">
    <title>Document</title>
</head>
<body>
    

    <title>Admin - Juegos</title>
<main>

<div class="carrossel">
        <div class="container-carrossel">
            <img src="./img/fortnite.png">
            <img src="./img/adidas.png">
            <img src="./img/rocketleague.jpeg">
        </div>
    </div>
    
    <section class="container-admin">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Banner</th>
                    <th colspan= "4">Plataformas</th>
                    <th colspan= "2">Ações</th>
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
                    <td><img src="img/<?php echo $jogos['banner'] ?>" width="150"></td>
                    <td>
                    <?php if($jogos['xbox']){ ?>
                        <img src="img/xbox.png" width="50">
                    <?php }else{ ?>
                        <img src="">
                    <?php } ?>
                    </td>
                    <td>
                    <?php if($jogos['playstation']){ ?>
                        <img src="img/playstation.png" width="50">
                    <?php }else{ ?>
                        <img src="">
                    <?php } ?>
                    </td>
                    <td>
                    <?php if($jogos['nintendo']){ ?>
                        <img src="img/nintendo.png" width="50">
                    <?php }else{ ?>
                        <img src="">
                    <?php } ?>
                    </td>
                    <td>
                    <?php if($jogos['pc']){ ?>
                        <img src="img/pc.png" width="50">
                    <?php }else{ ?>
                        <img src="">
                    <?php } ?>
                    </td>
                    <td><a class="botao-editar" href="editar.php?id=<?php echo $jogos['id'] ?>">Editar</a></td>
                    <td>
                        <form>
                        <a href="excluir.php?id=<?php echo $jogos['id'] ?>">
                        <input type="button" class="botao-excluir" value="Excluir">
                        </a>

                        </form>
                    </td>
                </tr>

                <?php
                endwhile;
                ?>
                

        </tbody>
        </table>
        
        <br>
        <a class="botao-adicionar" href="adicionar.php">Adicionar Jogo</a>
        
        <script src="carrossel.js"></script>
    </section>
</main>   
</body>
</html>