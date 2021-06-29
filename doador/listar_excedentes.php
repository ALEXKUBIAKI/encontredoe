<?php 


include ('conexao.php');

$sql = "select tb_doacao.iddoacao,tb_doacao.titulodoacao, tb_doacao.quantidadedoacao,tb_categoria.titulocategoria from tb_doacao inner join tb_categoria on tb_categoria.idcategoria=tb_doacao.fkcodcategoria WHERE doador = '{$_SESSION['id']}';";

$result = mysqli_query($conexao,$sql);



