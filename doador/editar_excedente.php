<?php


include ('conexao.php');



$_POST['iddoacao'] = ( isset($_POST['iddoacao']) ) ? $_POST['iddoacao'] : null;
$_POST['descricaodoacao'] = ( isset($_POST['descricaodoacao']) ) ? $_POST['descricaodoacao'] : null;
$_POST['quantidadedoacao'] = ( isset($_POST['quantidadedoacao']) ) ? $_POST['quantidadedoacao'] : null;
$_POST['tipo'] = ( isset($_POST['tipo']) ) ? $_POST['tipo'] : null;


$iddoacao = $_POST['iddoacao'];
$descricaodoacao = $_POST['descricaodoacao'];
$quantidadedoacao = $_POST['quantidadedoacao'];
$tipo = $_POST['tipo'];

$sql="UPDATE tb_doacao SET descricaodoacao ='{$descricaodoacao}', quantidadedoacao ='{$quantidadedoacao}', fkcodcategoria ='{$tipo}' WHERE iddoacao = '{$iddoacao}'";


$result = mysqli_query($conexao,$sql);
$conexao->close();
header('Location: lista_excedentes.php');
?>
