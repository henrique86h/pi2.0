<?php include "cabecalho.php" ?>
<title>Juegos - Cadastrar Jogo</title>

<body class="corpo">
    <main>
        <br>
        <section class="container-adicionar">
            <form method="post" enctype="multipart/form-data" action="salvar.php">
           
                <label for="nome">Nome</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome de um jogo" required>
                </div>
                <br>

                <label for="trailer">Link do Trailer</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="trailer" name="trailer" placeholder="Digite o link do video">
                </div>
                <br>
                <div class="container-plataformas">
                    <div class="plataformas">
                        <label for="xbox">
                        <input class="form-check-input" type="checkbox" id="xbox" name="xbox" value="xbox">
                    <img src="img/xbox.png" width=60></label>
                    </div>
                    <br>
                    <div class="plataformas">
                        <label for="playstation">
                        <input class="form-check-input" type="checkbox" id="playstation" name="playstation" value="playstation">
                    <img src="img/playstation.png" width=60></label>
                    </div>
                    <br>
                    <div class="plataformas">
                        <label for="nintendo">
                        <input class="form-check-input" type="checkbox" id="nintendo" name="nintendo" value="nintendo">
                    <img src="img/nintendo.png" width=60></label>
                    </div>
                    <br>
                    <div class="plataformas">
                        <label for="pc">
                        <input class="form-check-input" type="checkbox" id="pc" name="pc" value="pc">
                    <img src="img/pc.png" width=60></label>
                    </div>
                </div>
                <br>
                <label for="descricao">Descrição</label>
                <div class="col-sm-6">
                    <input class="form-control" type="text" id="descricao" name="descricao" placeholder="Digite uma descrição">
                </div>
                <br>

                <label for="banner">Banner do jogo</label>
                <div class="col-sm-6">
                    <input class="form-control" type="file" name="banner" names="banner" accept="image/*" id="banner" placeholder="Banner">
                </div>
                <br>

                <input type="submit" name="adicionar" class="botao-adicionar" value="Adicionar jogo">
            </form>
            <br>
        </section>
    </main>
</body>

<?php include "rodape.php" ?>