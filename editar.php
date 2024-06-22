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

        </section>
    </main>
</body>




<?php include "rodape.php" ?>