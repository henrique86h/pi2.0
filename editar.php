<?php include "cabecalho.php" ?>
<title>Juegos - Editar Jogo</title>
    <body class="corpo">
    <main>
        <br>
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
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome de um jogo" value="<?php echo $nome ?>" required>
                </div>
                <br>
            <label for="trailer">Link do Trailer</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="trailer" name="trailer" value="<?php echo $trailer ?>" placeholder="Digite o link do video">
                </div>
        <br>
                <div class="container-plataformas">
                    <div class="plataformas">
                        <label for="xbox">

                            <?php if($xbox == 'xbox'){ ?>
                                <input class="form-check-input" type="checkbox" id="xbox" name="xbox" value="xbox" checked>
                            <?php }else{ ?>
                                <input class="form-check-input" type="checkbox" id="xbox" name="xbox" value="xbox">
                            <?php } ?>

                    <img src="img/xbox.png" width=60></label>
                    </div>
                    <br>
                    <div class="plataformas">
                        <label for="playstation">        

                                <?php if($playstation == 'playstation'){ ?>
                                    <input class="form-check-input" type="checkbox" id="playstation" name="playstation" value="playstation" checked>
                                <?php }else{ ?>
                                    <input class="form-check-input" type="checkbox" id="playstation" name="playstation" value="playstation">
                                <?php } ?>

                    <img src="img/playstation.png" width=60></label>
                    </div>
                    <br>
                    <div class="plataformas">
                        <label for="nintendo">

                            <?php if($nintendo == 'nintendo'){ ?>
                                <input class="form-check-input" type="checkbox" id="nintendo" name="nintendo" value="nintendo" checked>
                            <?php }else{ ?>
                                <input class="form-check-input" type="checkbox" id="nintendo" name="nintendo" value="nintendo">
                            <?php } ?>

                    <img src="img/nintendo.png" width=60></label>
                    </div>
                    <br>
                    <div class="plataformas">
                        <label for="pc">
                        
                        <?php if($pc == 'pc'){ ?>
                            <input class="form-check-input" type="checkbox" id="pc" name="pc" value="pc" checked>
                        <?php }else{ ?>
                            <input class="form-check-input" type="checkbox" id="pc" name="pc" value="pc">
                        <?php } ?>

                    <img src="img/pc.png" width=60></label>
                    </div>
                </div>
                <br>
                    <label for="descricao">Descrição</label>
                        <div class="col-sm-6"> 
                            <input class="form-control" type="text" id="descricao" name="descricao" placeholder="Digite uma descrição" value="<?php echo $descricao ?>" >
                        </div>
                        <br>
                    <label for="banner">Banner do jogo</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="file" name="banner" accept="image/png, image/jpg, image/jpeg" value="img/<?php echo $banner ?>" id="banner">
                            <br><br>
                            <img width="500px" src="img/<?php echo $banner ?>">
                        </div>

                <br>
                <div class="editar">
                <input type="submit" name="editar" class="btnEditar" value="Editar jogo">
                </div>
                <br>
        </form>

        </section>
    </main>
    </body>



<?php include "rodape.php" ?>