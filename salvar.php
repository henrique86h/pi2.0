<?php
$pasta = "img/";
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$banner = $_FILES['banner'];
$xbox = $_POST['xbox'];
$playstation = $_POST['playstation'];
$nintendo = $_POST['nintendo'];
$pc = $_POST['pc'];

$partes = explode("." , $banner);
$jogoNovo = round(microtime(true)) . "." . end($partes);

move_uploaded_file($_FILES['banner']['tmp_name'] , $pasta . $jogoNovo);

include "conexao.php";

$imagem = $jogoNovo;
$sql = "insert into tb_pi (nome, descricao, banner) values('$nome', '$descricao', '$banner')";

if($xbox == ""){
    
}else{
    $sql = "insert into tb_pi (xbox) values ('$xbox')";
}

if($playstation == ""){
    
}else{
    $sql = "insert into tb_pi (playstation) values ('$playstation')";
}

if($nintendo == ""){
    
}else{
    $sql = "insert into tb_pi (nintendo) values ('$nintendo')";
}

if($pc == ""){
    
}else{
    $sql = "insert into tb_pi (pc) values ('$pc')";
}

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("location:admin.php");

?>