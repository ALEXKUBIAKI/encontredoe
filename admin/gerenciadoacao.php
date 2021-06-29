

<html>
 <head>
	<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
	<title>Gerencia de Doações</title>
	  	 <link rel="stylesheet" href="style.css">
                 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 </head>

<fieldset>
        <div style="background-color:#B0E0E6;text-align:center">
            <p><font size="10">Gerenciar Doações</font></p>
        </div>
		<br>
 <body>
		
 <?php

 
// Verificar se foi enviando dados via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id   = (isset($_POST["id"]) && $_POST["id"]     != null) ? $_POST["id"]   : "";
    $nome = (isset($_POST["nome"]) && $_POST["nome"] != null) ? $_POST["nome"] : "";
} else if (!isset($id)) {
    // Se não se não foi setado nenhum valor para variável $id
    $id   = (isset($_GET["id"]) && $_GET["id"]       != null) ? $_GET["id"]    : "";
    $nome = NULL;
}
 
try {
 	$conexao = new PDO('mysql:host=localhost;dbname=encontredoe', "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
} catch (PDOException $erro) {
    echo "Erro na conexão:".$erro->getMessage();
}
 

 
// Bloco if utilizado pela etapa Delete
if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != "") {
    try {
        $stmt = $conexao->prepare("update tb_doacao set statusdoacao=1 WHERE iddoacao = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            echo "Solicitação liberada com sucesso.";

        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
		 $stmt = $conexao->prepare("update tb_itens_interesse set fkstatusdoacao=1 WHERE fkdoacao = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            //echo "Status atualizado com êxito";
            $id = null;
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }       
    } catch (PDOException $erro) {
    	echo"<script language='javascript' type='text/javascript'>alert('A operação não pode ser executada.');
			window.location.href='gerenciadoacao.php';</script>";
 
    }
}
?>


       


            <table class="tabela">
                <tr>
                    <th>Nome do receptor</th>
					<th>Nome do item</th>
					<th>quantidade</th>
					<th>Nome do doador</th>
                    <th>Ação</th>
                   
                </tr>

                <?php
 
                // Bloco que realiza o papel do Read - recupera os dados e apresenta na tela
                try {
                    $stmt = $conexao->prepare("select tb_usuarios.nomeusuario as nomedoreceptor,tb_doacao.titulodoacao,tb_doacao.quantidadedoacao,tb_itens_interesse.nomedoador,tb_itens_interesse.fkdoacao from tb_itens_interesse inner join
tb_usuarios on tb_itens_interesse.fkusuario=tb_usuarios.idusuario
 inner join tb_doacao on tb_doacao.iddoacao=tb_itens_interesse.fkdoacao where tb_doacao.statusdoacao=0



");
                    if ($stmt->execute()) {
                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                            echo "<tr>";
                            echo "<td><center>".$rs->nomedoreceptor."<center></td> <td><center>".$rs->titulodoacao."<center></td> <td><center>".$rs->quantidadedoacao."<center></td><td><center>".$rs->nomedoador."<center></td><td><center><a class='botoes' href=\"?act=del&id=".$rs->fkdoacao."\">Liberar doação</a></center></td>  
                            "
                                       ;
                            echo "</tr>";
                        }
                    } else {
                        echo "Erro: Não foi possível recuperar os dados do banco de dados";
                    }
                } catch (PDOException $erro) {
                    echo "Erro: ".$erro->getMessage();
                }
                ?>
            </table>
		<p align="center"><br>
            <input type="button" value="Voltar" id="Logout" onClick=location.href="validaadm.php" class="btn btn-lg btn-primary btn-block">
		</p>
        </fieldset>
		
        <div style="background-color:#B0E0E6;text-align:center">
            <p><font size="3">Todos direitos reservados a Alex Kubiaki - Mauricio Godoy - Pedro Henrique Schmidt - Matheus Hetkowski Stropper</font></p>
		</div>
		
    </body>
</html>