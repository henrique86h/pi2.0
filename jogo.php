<?php include "cabecalho.php" ?>

<?php
    $id = $_GET['id'];
    include "conexao.php";
    $sql = "select * from tb_pi where id = $id ";
    $resultado = mysqli_query($conexao, $sql);
            
    if($jogos = mysqli_fetch_assoc($resultado))
    
    
?>



<h1><?php echo $jogos['nome'] ?></h1>       

<img class="banner" src="img/<?php echo $jogos['banner'] ?>">

<p><?php echo $jogos['descricao'] ?></p>

<h3>Trailer</h3>

<?php echo $jogos['trailer'] ?>


    
<br><br><br>

<?php include "rodape.php" ?>
