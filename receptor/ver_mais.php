<?php

include ('conexao.php');


$iddoacao = $_GET['iddoacao'];


$sql = "SELECT 
iddoacao,
titulodoacao,
quantidadedoacao,
descricaodoacao,
statusdoacao
FROM tb_doacao WHERE iddoacao ='{$iddoacao}'";

$result= mysqli_query($conexao,$sql);
$linha = $result->fetch_array();



