<?php 
session_start();
include ('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
$_POST['usuario'] = ( isset($_POST['usuario']) ) ? $_POST['usuario'] : null;
$_POST['senha']  = ( isset($_POST['senha']) )  ? $_POST['senha']  : null;

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select idusuario, loginusuario,tipousuario from tb_usuarios where loginusuario = '{$usuario}' and senhausuario ='{$senha}';";
$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);



while ($pegaid = $result->fetch_array()) {
$registros =$pegaid[0];
$tipousuario=$pegaid[2];	
}     

if($row == 1){
	$_SESSION['tipousuario'] = $tipousuario;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['id'] =$registros; 
	if ($tipousuario==1){
    header('Location: receptor/index_usuario.php');
	exit();
	}
 	if ($tipousuario==0){
    header('Location: doador/index_doador.php');
	exit();
	}
}else{
    $_SESSION['nao_autenticado'] = true;
    header ('Location: index.php');
    exit();
}