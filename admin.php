<?php include "cabecalho.php"; ?>
    

    <title>Admin - Juegos</title>
<main>
<div class="adicionar">
        <a class="botao-adicionar" href="adicionar.php">Adicionar Jogo</a>
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
        
            <?php
            include "conexao.php";
            $sql = "select * from tb_pi";
            $resultado = mysqli_query($conexao, $sql);
            
            while ($jogos = mysqli_fetch_assoc($resultado)):
            ?>
            <tbody>
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
                        <img class="imgPc" src="img/pc.png" width="50">
                    <?php }else{ ?>
                        <img src="">
                    <?php } ?>
                    </td>
                    <td><a class="botao-editar" href="editar.php?id=<?php echo $jogos['id'] ?>">Editar</a></td>
                    <td>
                        <a href="excluir.php?id=<?php echo $jogos['id'] ?>">
                        <input type="button" class="botao-excluir" value="Excluir">
                        </a>
                    </td>
                </tr>
            </tbody>

                <?php
                endwhile;
                ?>

        </table>
        </section>
</main>   

<?php include "rodape.php"; ?>