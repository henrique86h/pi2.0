<?php include "cabecalho.php" ?>
<div class="centro">
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

<iframe width="560" height="315" src="<?php echo $jogos['trailer'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


</div>
<br><br><br>

<?php include "rodape.php" ?>
