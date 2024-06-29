<?php include "cabecalho.php" ?>
    <title>Admin - Juegos</title>
</head>
<body>
<main>

    <div class="container-carrossel">

        <div class="slides-carrossel fade">
            <img class="imagemCarrossel" src="img/fortnite.png" width="100%">
        </div>
        <div class="slides-carrossel fade">
            <img class="imagemCarrossel" src="img/rocketleague.jpeg" width="100%">
        </div>
        <div class="slides-carrossel fade">
            <img class="imagemCarrossel" src="img/puma.jpg" width="100%">
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

<?php include "rodape.php" ?>