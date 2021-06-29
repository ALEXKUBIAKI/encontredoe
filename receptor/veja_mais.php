<?php


session_start();
include('ver_mais.php');
//include('verificar_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veja Mais</title>
    <link rel="stylesheet" href="css/style.css">
<style type="text/css">
            .botoes{
            border: 1px solid black;
            border-radius: 4px;
            display: inline-block;
            cursor: pointer;
            font-family: Verdana;
            font-weight: bold;
            font-size: 13px;
            padding: 6px 10px;
            text-decoration: none;
            color: black;
            background-color: rgb(239, 239, 239);
            align-items: center;
        }
</style>
</head>

<body style="font-family: Verdana;">
    <ul class="nav">
        <li class="nav-item">
            <a href="index_usuario.php" style="border-bottom:3px solid white;">Pesquisar Itens</a>
        </li>
        <li class="nav-item">
            <a href="lista_excedentes.php">Acompanhar Solicitações</a>
        </li>
        <li class="nav-item">
            <a href="sobre.php">Sobre</a>
        </li>
        
        <li class="user-item">
            <a href="logout.php">Sair</a>
        </li>   
        <li class="user-item">
            <a href="usuario.php">Meu Perfil</a>
        </li> 
    </ul>
    <div class="content">
        <div class="sobre">
                    <div>
                        <h3>INFORMAÇÕES SOBRE A DOAÇÃO</h3>
                    </div>
                    <div>
                        <p>Doação: <?php echo $linha['titulodoacao'];?></p>
                    </div>
                    <div>
                        <p>Quantidade disponível: <?php echo $linha['quantidadedoacao'];?></p>
                    </div>
                    <div>
                        <p>Descrição: <?php echo $linha['descricaodoacao'];?></p>
                    </div>
                     <div>
                        <p>Status: <?php echo $linha['statusdoacao'];?></p>
                    </div>
                     <div>
                        <p><a class="botoes" href = "interesse.php?iddoacao=<?php echo $linha['iddoacao'];?>">Tenho interesse neste item</a></p>
                    </div>					
	 
         </div>              
    </div>
	
	<center><a class="botoes" href="index_usuario.php"> Voltar </a></center>
	

</body>
</html>