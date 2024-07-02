<?php include "cabecalho.php" ?>
<div class="centro">
<?php
    $id = $_GET['id'];
    include "conexao.php";
    $sql = "select * from tb_pi where id = $id ";
    $resultado = mysqli_query($conexao, $sql);
            
    if($jogos = mysqli_fetch_assoc($resultado))
    
    
?>

<br>

<h1><?php echo $jogos['nome'] ?></h1> 

<br>

<img class="banner" src="img/<?php echo $jogos['banner'] ?>">

<br><br>

<p><?php echo $jogos['descricao'] ?></p>

<br>

<h3>Trailer</h3>

<iframe width="560" height="315" src="<?php echo $jogos['trailer'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

<br><br>

<h3>Plataformas disponiveis:</h3>

<br>

<div class="plataformas-jogo">
    <div class="row">
            <?php if($jogos['xbox']){ ?>
        <div class="col">
            
                <img src="img/xbox.png ?>" width="40">
            </div>
            <?php }else{ ?>
                
            <?php } ?>
        <?php if($jogos['playstation']){ ?>
        <div class="col">
            
                <img src="img/playstation.png" width="40">
                </div>
            <?php }else{ ?>
                
            <?php } ?>
        
        <?php if($jogos['nintendo']){ ?>
        <div class="col">
            
                <img src="img/nintendo.png" width="40">
                </div>
            <?php }else{ ?>
                
            <?php } ?>
       
        <?php if($jogos['pc']){ ?>
        <div class="col">
            
                <img src="img/pc.png" width="40">
                </div>
            <?php }else{ ?>
                
            <?php } ?>
       
    </div>
</div>

<br><br>

</div>
<br><br><br>

<?php include "rodape.php" ?>
