<?php


session_start();
include('ver_dados.php');
//include('verificar_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acompanhar Solicitações</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="font-family: Verdana;">

    <ul class="nav">
        <li class="nav-item">
            <a href="index_usuario.php">Pesquisar Itens</a>
        </li>
        <li class="nav-item">
            <a href="lista_excedentes.php"  style="border-bottom:3px solid white;">Acompanhar Solicitações</a>
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

    </ul>
    <div class="content">
        <div class="sobre">
                    <div>
                        <h3>INFORMAÇÕES SOBRE A DOAÇÃO</h3>
                    </div>
                    <div>
                        <p><?php echo $retornodoador;?></p>
                    </div>
                    <div>
                        <p><?php echo $retornoemail;?></p>
                    </div>
                    <div>
                        <p><?php echo $retornoendereco;?></p>
                    </div>
                     <div>
                        <p><?php echo $retornotelefone;?></p>
                    </div>
                     				
	 
         </div>              
    </div>
	
	
	
	
	
</body>
</html>