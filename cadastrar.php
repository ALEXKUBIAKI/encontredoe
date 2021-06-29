<?php 
session_start();

include ('conexao.php');

$nome 		 = mysqli_real_escape_string($conexao, trim($_POST['nomeusuario']));
$usuario     = mysqli_real_escape_string($conexao, trim($_POST['loginusuario']));
$email 		 = mysqli_real_escape_string($conexao, trim($_POST['emailusuario']));
$telefone 	 = mysqli_real_escape_string($conexao, trim($_POST['telefoneusuario']));
$idade  	 = mysqli_real_escape_string($conexao, trim($_POST['idadeusuario']));
$endereco  	 = mysqli_real_escape_string($conexao, trim($_POST['enderecousuario']));
$cidade  	 = mysqli_real_escape_string($conexao, trim($_POST['cidadeusuario']));
$cpf  	     = mysqli_real_escape_string($conexao, trim($_POST['cpfusuario']));
$senha       = mysqli_real_escape_string($conexao, trim($_POST['senhausuario']));
$tipo       = mysqli_real_escape_string($conexao, trim($_POST['tipousuario']));

$sql="SELECT COUNT(*) AS total FROM tb_usuarios WHERE loginusuario= '$usuario'";

$result = mysqli_query($conexao,$sql);

$row = mysqli_fetch_assoc($result);


if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: cadastro.php');
    exit;
}


$sql="SELECT COUNT(*) AS total FROM tb_usuarios WHERE emailusuario= '$email'";

$result = mysqli_query($conexao,$sql);

$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['email_em_uso'] = true;
    header('Location: cadastro.php');
    exit;
}

$sql="SELECT COUNT(*) AS total FROM tb_usuarios WHERE cpfusuario= '$cpf'";

$result = mysqli_query($conexao,$sql);

$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['cpf_em_uso'] = true;
    header('Location: cadastro.php');
    exit;
}



$sql = "INSERT INTO tb_usuarios(nomeusuario,loginusuario,emailusuario,telusuario,idadeusuario,senhausuario,enderecousuario,cidadeusuario,cpfusuario,tipousuario) VALUES ('$nome','$usuario','$email','$telefone','$idade','$senha','$endereco','$cidade','$cpf','$tipo')";
if($conexao->query($sql) === TRUE){
    $_SESSION['cadastro'] = true;
}

$conexao->close();
header('Location: login.php');