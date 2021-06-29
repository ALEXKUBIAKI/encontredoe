<?php


session_start();
//include('verificar_login.php');
include ('conexao.php');

?>

<!DOCTYPE html>

<?php

$sql = "SELECT * FROM tb_categoria";
$result =  mysqli_query($conexao,$sql);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Itens</title>
    <link rel="stylesheet" href="css/style.css">
 
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
        <div class ="barra_pesquisa">
                <form class="search_form" method="POST" action="pesquisar.php">
                    <input type="text" name="pesquisar" placeholder="PESQUISAR">
                    <button type="submit">Pesquisar</button>
                    <br><select name="filtro">

                        <?php
                        while ($linha = $result->fetch_array()){
                             ?>

                                <option value="<?php echo $linha['idcategoria']; ?>">
                                <?php
                                echo $linha['titulocategoria'];

                                ?>
                                </option>
                                <?php
                            }
                            ?>

                                
                        </select> 

                </form> 
        </div>
        
    </div>
</body>
</html>