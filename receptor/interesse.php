<?php 
session_start();

include ('conexao.php');
$_GET['iddoacao'] = ( isset($_GET['iddoacao']) ) ? $_GET['iddoacao'] : null;
$iddoacao  = intval($_GET['iddoacao']);
$idusuario = intval($_SESSION['id']);
var_dump($idusuario);

 $sql = "select tb_usuarios.nomeusuario from tb_usuarios inner join tb_doacao on tb_doacao.doador=tb_usuarios.idusuario where tb_doacao.iddoacao='$iddoacao'";
 $result = mysqli_query($conexao,$sql);
 $row = mysqli_fetch_assoc($result);
 $nomedousuario=$row['nomeusuario']; 
 

var_dump($nomedousuario);


$sql = "INSERT INTO tb_itens_interesse(fkdoacao,fkusuario,nomedoador) VALUES ('$iddoacao','$idusuario','$nomedousuario')";
 
if($conexao->query($sql) === TRUE){
    $_SESSION['doacao'] = true;
}

$conexao->close();
 header('Location: lista_excedentes.php');