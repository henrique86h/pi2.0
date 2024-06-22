<?php include "cabecalho.php" ?>
<title>Juegos - Editar Jogo</title>

<body>
    <main>
        <section class="container-adicionar">

        <?php
        $id = $_GET['id'];
        $nome = "";
        $descricao = "";
        $banner = "";
        $xbox = "";
        $playstation = "";
        $nintendo = "";
        $pc = "";

        include "conexao.php";
        $sql = "select * from tb_pi where id = $id";
        $resultado = mysqli_query($conexao, $sql);
        while($jogo = mysqli_fetch_assoc($resultado)){
            $nome = $jogo['nome'];
            $descricao = $jogo['descricao'];
            $banner = $jogo['banner'];
            $xbox = $jogo['xbox'];
            $playstation = $jogo['playstation'];
            $nintendo = $jogo['nintendo'];
            $pc = $jogo['pc'];
        }
        ?>

        <form method="post" enctype="multipart/form-data" action="editar-salvar.php?id=<?php echo $id ?>">

        <label for="nome">Nome</label>

                <input type="text" id="nome" name="nome" placeholder="Nome de um jogo" value="<?php echo $jogo ?>" required>
                <div class="container-plataformas">
                    <div>
                        <label for="xbox">
                        <input type="checkbox" id="xbox" name="xbox" value="<?php echo $jogo ?>">
                    <img src="img/xbox.png" width=40></label>
                    </div>
                    <div>
                        <label for="playstation">        

                                <?php if($playstation == 'playstation'){ ?>
                                    <input type="checkbox" id="playstation" name="playstation" value="playstation" checked>
                                <?php }else{ ?>
                                    <input type="checkbox" id="playstation" name="playstation" value="playstation">
                                <?php } ?>

                    <img src="img/playstation.png" width=40></label>
                    </div>
                    <div>
                        <label for="nintendo">
                        <input type="checkbox" id="nintendo" name="nintendo" value="nintendo">
                    <img src="img/nintendo.png" width=40></label>
                    </div>
                    <div>
                        <label for="pc">
                        <input type="checkbox" id="pc" name="pc" value="pc">
                    <img src="img/pc.png" width=40></label>
                    </div>
                </div>
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" name="descricao" placeholder="Digite uma descrição">

                <br>

                <label for="banner">Banner do jogo</label>
                <input type="file" name="banner" names="banner" accept="image/*" id="banner" placeholder="Banner">

                <br>

                <input type="submit" name="editar" class="botao-adicionar" value="Editar jogo">
        </form>

        </section>
    </main>
</body>




<?php include "rodape.php" ?>