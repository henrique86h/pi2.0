<?php
$pasta = "img/";
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$xbox = $_POST['xbox'];
$playstation = $_POST['playstation'];
$nintendo = $_POST['nintendo'];
$pc = $_POST['pc'];
$trailer = $_POST['trailer'];

$banner = $_FILES["banner"]["name"];
$tempname = move_uploaded_file($_FILES["banner"]["tmp_name"], $pasta.$banner);


include "conexao.php";

$sql = "insert into tb_pi (nome, descricao, xbox, playstation, nintendo, pc, banner, trailer) values('$nome', '$descricao', '$xbox', '$playstation', '$nintendo', '$pc', '$banner', '$trailer')";
    

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("location:admin.php");

?>