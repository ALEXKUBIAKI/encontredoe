<?php

include ('conexao.php');

$_POST['id_usuario'] 	= ( isset($_POST['id_usuario']) ) ? $_POST['id_usuario']: null;
$_POST['nome'] 			= ( isset($_POST['nome']) ) 	  ? $_POST['nome']      : null;
$_POST['usuario'] 		= ( isset($_POST['usuario']) )    ? $_POST['usuario'] 	: null;
$_POST['email'] 		= ( isset($_POST['email']) )      ? $_POST['email']     : null;
$_POST['telefone'] 		= ( isset($_POST['telefone']) )   ? $_POST['telefone']  : null;
$_POST['idade'] 		= ( isset($_POST['idade']) )      ? $_POST['idade']     : null;
$_POST['endereco'] 		= ( isset($_POST['endereco']) )   ? $_POST['endereco']  : null;
$_POST['cidade'] 		= ( isset($_POST['cidade']) )     ? $_POST['cidade']    : null;
$_POST['cpf'] 		    = ( isset($_POST['cpf']) )        ? $_POST['cpf']       : null;
$_POST['senha'] 		= ( isset($_POST['senha']) )      ? $_POST['senha']     : null;


$id_usuario  = $_POST['id_usuario'];
$nome 		 = $_POST['nome'];
$usuario 	 = $_POST['usuario'];
$email 		 = $_POST['email'];
$telefone 	 = $_POST['telefone'];
$idade 		 = $_POST['idade'];
$endereco    = $_POST['endereco'];
$cidade      = $_POST['cidade'];
$cpf         = $_POST['cpf'];
$senha 		 = $_POST['senha'];

$sql="SELECT COUNT(*) AS total FROM tb_usuarios WHERE loginusuario= '$usuario' and idusuario <> $id_usuario";

$result = mysqli_query($conexao,$sql);

$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
   echo"<script language='javascript' type='text/javascript'>alert('Este login já está em uso');
			window.location.href='usuario.php';</script>";
   exit;
}

$sql="SELECT COUNT(*) AS total FROM tb_usuarios WHERE emailusuario= '$email' and idusuario <>$id_usuario";

$result = mysqli_query($conexao,$sql);

$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
   echo"<script language='javascript' type='text/javascript'>alert('Este email já está em uso');
			window.location.href='usuario.php';</script>";
   exit;
}


$sql="UPDATE tb_usuarios SET nomeusuario ='{$nome}', emailusuario ='{$email}', telusuario ='{$telefone}', idadeusuario ='{$idade}', senhausuario ='{$senha}', enderecousuario ='{$endereco}', cidadeusuario ='{$cidade}', cpfusuario ='{$cpf}' WHERE idusuario = '{$id_usuario}'";


$result = mysqli_query($conexao,$sql);

$conexao->close();
header('Location: usuario.php');
?>