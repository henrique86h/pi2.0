<?php include "cabecalho.php" ?>
<div class="centro">

<br>

<h1>
    Joguinhos TI 22
</h1>

<br>

<p>Este site é focado em fazer as pessoas sairem da sua zona de conforto e testarem jogos diferentes <br>do que estão acostumados e proporcionar uma experiência nova.</p>

<br>

<h3>Jogos, games e juegos</h3>
<br><br>

<div class="jogos">
<?php
    
    include "conexao.php";

    $sql = "select * from tb_pi order by rand()";

    $resultado = mysqli_query($conexao, $sql);

    while($jogos = mysqli_fetch_assoc($resultado)): 
        
    ?>

    <div class="card-jogos">
        <a href="jogo.php?id=<?php echo $jogos['id'] ?>">
        <img src="img/<?php echo $jogos['banner'] ?>" width="100%";>
        <h5><?php echo $jogos['nome'] ?></h5>
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
    </a>
    </div>
    <?php endwhile;?>
</div>

<br><br>

</div>

<?php include "rodape.php" ?>
