<?php


session_start();
include('verificar_login.php');
include('listar_excedentes.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acompanhar Solicitações</title>
    <link rel="stylesheet" href="css/style.css">
        <style type="text/css">        
 tr{
            border-bottom:1px solid black;
        }
        tr:hover{
            background:#C0C0C0;
        }
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
        }

    </style>
</head>
<body style="font-family: Verdana;">

    <ul class="nav">
        <li class="nav-item">
            <a href="index_usuario.php">Pesquisar Itens</a>
        </li>
        <li class="nav-item">
            <a href="lista_excedentes.php" style="border-bottom:3px solid white;">Acompanhar Solicitações</a>
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
        
        <table class="tabela" cellspacing="10" cellpadding="5" class="tabela">          
            <tr>
                <th>Objeto</th>
                <th>Quantidade</th>
                <th>Categoria</th>
                <th>Ação</th>
				<th>Status</th>
            </tr>
            <?php while ($linha = $result->fetch_array()){ ?>
                <tr>
                    <td>
                        <?php
                            echo $linha["titulodoacao"];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $linha["quantidadedoacao"];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $linha["titulocategoria"];
                        ?>
                    </td> 
					
                    <td>
                       <a class="botoes" href = "removeinteresse.php?id_excedente=<?php echo $linha['iddoacao'];?>">Remover interesse</a>
			        </td>  
					
					<td>					
                        <a class="botoes" href="veja_dados.php?iddoacao=<?php echo $linha['iddoacao'];?>">Ver Status</a>
					</td>  
                </tr>
            <?php }?>
        </table>

    </div>

</body>
</html>