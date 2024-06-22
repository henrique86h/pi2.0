<?php
$pasta = "img/";
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$xbox = $_POST['xbox'];
$playstation = $_POST['playstation'];
$nintendo = $_POST['nintendo'];
$pc = $_POST['pc'];

$banner = $_FILES["banner"]["name"];
$tempname = $_FILES["banner"]["tmp_name"];
$pasta = "./img" . $banner;


include "conexao.php";

$sql = "insert into tb_pi (nome, descricao, xbox, playstation, nintendo, pc, banner) values('$nome', '$descricao', '$xbox', '$playstation', '$nintendo', '$pc', '$banner')";
    

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("location:admin.php");

?>