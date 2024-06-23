<?php

$pasta = "img/";
$id = $_GET['id'];
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

$sql = "update tb_pi set nome = '$nome', descricao = '$descricao', xbox = '$xbox', playstation = '$playstation', nintendo = '$nintendo', pc = '$pc' banner = '$banner' where id = $id ";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header("location:admin.php");

?>