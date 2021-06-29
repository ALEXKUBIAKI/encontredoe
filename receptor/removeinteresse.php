<?php



include ('conexao.php');

$_GET['id_excedente'] = ( isset($_GET['id_excedente']) ) ? $_GET['id_excedente'] : null;


$id_excedente = intval($_GET['id_excedente']);


$sql = "DELETE FROM tb_itens_interesse WHERE fkdoacao = '$id_excedente'";

$result = mysqli_query($conexao,$sql);
?>

<script>location.href='lista_excedentes.php'</script>