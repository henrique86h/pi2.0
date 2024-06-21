<?php include "cabecalho.php" ?>
<title>Juegos - Cadastrar Jogo</title>

<body>
    <main>
        <section class="container-adicionar">
            <form method="post" enctype="multipart/form-data" action="salvar.php">

                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Nome de um jogo" required>
                <div class="container-plataformas">
                    <div>
                        <label for="xbox">
                        <input type="checkbox" id="xbox" name="xbox" value="xbox">
                    <img src="img/xbox.png" width=40></label>
                    </div>
                    <div>
                        <label for="playstation">
                        <input type="checkbox" id="playstation" name="playstation" value="playstation">
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

                <input type="submit" name="adicionar" class="botao-adicionar" value="Adicionar jogo">
            </form>

        </section>
    </main>
</body>


<?php include "rodape.php" ?>