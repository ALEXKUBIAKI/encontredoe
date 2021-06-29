<?php

include ('conexao.php');


$iddoacao = $_GET['iddoacao'];


$sql = "select tb_usuarios.nomeusuario as doador,tb_usuarios.emailusuario as email_doador,tb_usuarios.enderecousuario as endereco_doador,tb_usuarios.telusuario as telefone from tb_usuarios inner join tb_doacao on tb_doacao.doador=tb_usuarios.idusuario
inner join tb_itens_interesse on tb_itens_interesse.fkdoacao=tb_doacao.iddoacao where tb_itens_interesse.fkstatusdoacao=1
and fkdoacao='{$iddoacao}'";

$result= mysqli_query($conexao,$sql);
$linha = $result->fetch_array();

$collection =  mysqli_num_rows($result);



if ($collection==1){
 $retornodoador="Doador: ".$linha['doador'];
 $retornoemail="Email do doador: ".$linha['email_doador'];
 $retornoendereco="Endereco do doador: ".$linha['endereco_doador'];
 $retornotelefone="Telefone: ".$linha['telefone'];
}
if ($collection==0){
 $retornodoador="Não Liberado";
 $retornoemail="";
 $retornoendereco="";
 $retornotelefone="";
}

//$retornodoador=$linha['doador'];
//$retornoemail=$linha['email_doador'];
//$retornoendereco=$linha['endereco_doador'];
//$retornotelefone=$linha['telefone'];