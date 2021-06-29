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
    <title>Início</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body style="font-family: Verdana;">

    <ul class="nav">

        <li class="nav-item">
            <a href="cadastro_excedente.php" style="border-bottom:3px solid white;">Cadastrar Doação</a>
        </li>
        <li class="nav-item">
            <a href="lista_excedentes.php">Itens Cadastrados</a>
        </li>
        <li class="nav-item">
            <a href="sobre_doador.php">Sobre</a>
        </li>
        
        <li class="user-item" class="float-right">
            <a href="logout.php">Sair</a>
        </li>   
                <li class="user-item" >
            <a href="usuario.php">Meu Perfil </a>
        </li>
    </ul>

    <div class="content">

        <div class="form">
                <div>
                    <h2>Doar</h2>
                </div>
                <form action="cadastrar_excedente.php" method="POST">
                        <div>
                            <input type="text" placeholder="Titulo do item doado" name="titulomaterial" required>
                        </div>              
                        <div>
                            <input type="text" placeholder="Descrição do material" name="material" required>
                        </div>
                        <div>
                            <input type="number" placeholder="Quantidade" name="quantidade"  required>
                        </div>
                        <input type="hidden" value="<?php echo $_SESSION['id'];?>" name="usuario">
                        <div>
                            <select name="categoria">
                         
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
                        </div>
                        
                        <button type="submit">Adicionar</button>

                </form>
            </div>
    </div>
    
 

 
     
     
 
        
    </div>
</body>
</html>