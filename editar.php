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
        $trailer = "";

        include "conexao.php";
        $sql = "select * from tb_pi where id = $id";
        $resultado = mysqli_query($conexao, $sql);
        while($jogos = mysqli_fetch_assoc($resultado)){
            $nome = $jogos['nome'];
            $descricao = $jogos['descricao'];
            $banner = $jogos['banner'];
            $xbox = $jogos['xbox'];
            $playstation = $jogos['playstation'];
            $nintendo = $jogos['nintendo'];
            $pc = $jogos['pc'];
            $trailer = $jogos['trailer'];
        }
        ?>

        <form method="post" enctype="multipart/form-data" action="editar-salvar.php?id=<?php echo $id ?>">

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="Nome de um jogo" value="<?php echo $nome ?>" required>


            <label for="trailer">Link do Trailer</label>
            <input type="text" id="trailer" name="trailer" value=<?php echo $trailer ?> placeholder="Digite o link script">

                <div class="container-plataformas">
                    <div>
                        <label for="xbox">

                            <?php if($xbox == 'xbox'){ ?>
                                <input type="checkbox" id="xbox" name="playstation" value="xbox" checked>
                            <?php }else{ ?>
                                <input type="checkbox" id="playstation" name="xbox" value="xbox">
                            <?php } ?>

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

                            <?php if($nintendo == 'nintendo'){ ?>
                                <input type="checkbox" id="nintendo" name="nintendo" value="nintendo" checked>
                            <?php }else{ ?>
                                <input type="checkbox" id="nintendo" name="nintendo" value="nintendo">
                            <?php } ?>

                    <img src="img/nintendo.png" width=40></label>
                    </div>
                    <div>
                        <label for="pc">
                        
                        <?php if($pc == 'pc'){ ?>
                            <input type="checkbox" id="pc" name="pc" value="pc" checked>
                        <?php }else{ ?>
                            <input type="checkbox" id="pc" name="pc" value="pc">
                        <?php } ?>

                    <img src="img/pc.png" width=40></label>
                    </div>
                </div>
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" name="descricao" placeholder="Digite uma descrição" value="<?php echo $descricao ?>" >

                <br>

                <label for="banner">Banner do jogo</label>
                <input type="file" name="banner" names="banner" accept="image/*" id="banner" placeholder="Banner">
                <img src="img/<?php echo $banner ?>">

                <br>

                <input type="submit" name="editar" class="botao-adicionar" value="Editar jogo">
        </form>

        </section>
    </main>




<?php include "rodape.php" ?>