<?php
include ('conexao.php');

$_POST['titulomaterial'] = ( isset($_POST['titulomaterial']) ) ? $_POST['titulomaterial'] : null;
$_POST['material'] 		 = ( isset($_POST['material']) )       ? $_POST['material']       : null;
$_POST['quantidade'] 	 = ( isset($_POST['quantidade']) )     ? $_POST['quantidade']     : null;
$_POST['usuario'] 		 = ( isset($_POST['usuario']) )        ? $_POST['usuario']  	  : null;
$_POST['categoria']  	 = ( isset($_POST['categoria']) )      ? $_POST['categoria'] 	  : null;

$titulomaterial = mysqli_real_escape_string($conexao, trim($_POST['titulomaterial']));
$material	    = mysqli_real_escape_string($conexao, trim($_POST['material']));
$quantidade 	= mysqli_real_escape_string($conexao, trim($_POST['quantidade']));
$usuario 		= mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$categoria 		= $_POST['categoria'];

$sql = "INSERT INTO tb_doacao(titulodoacao,quantidadedoacao,fkcodcategoria,descricaodoacao,doador) VALUES ('$titulomaterial','$quantidade','$categoria','$material','$usuario')";

$conexao->query($sql);

$conexao->close();

header('Location: lista_excedentes.php');
?>
