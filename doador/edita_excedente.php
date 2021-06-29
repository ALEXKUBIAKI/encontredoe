<?php


session_start();
include('verificar_login.php');
include('conexao.php');

$_GET['id_excedente'] = ( isset($_GET['id_excedente']) ) ? $_GET['id_excedente'] : null;

$id_excedente = intval($_GET['id_excedente']);

$query = "SELECT iddoacao,descricaodoacao,quantidadedoacao,fkcodcategoria FROM tb_doacao WHERE iddoacao = '{$id_excedente}'";


$result = mysqli_query($conexao,$query);
$linha = $result->fetch_array();
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
    <title>Editar Doação</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="font-family: Verdana;">

        <ul class="nav">

        <li class="nav-item">
            <a href="cadastro_excedente.php">Cadastrar Doação</a>
        </li>
        <li class="nav-item">
            <a href="lista_excedentes.php" style="border-bottom:3px solid white;">Itens Cadastrados</a>      
        </li>
        <li class="nav-item">
            <a href="sobre_doador.php">Sobre</a>
        </li>
        
        <li class="user-item">
            <a href="logout.php">Sair</a>
        </li>   
                <li class="user-item">
            <a href="usuario.php">Meu Perfil </a>
        </li>
    </ul>


    <div class="content">
        <div class="form">
                <div>
                    <h2>Editar Doação</h2>
                </div>
                <form action="editar_excedente.php" method="POST">
                        <input type="hidden" value="<?php echo $linha['iddoacao'];?>" name="iddoacao"></input>

                        <div style="width: 77%; font-size: 15px;">Descrição:</div>
                        <div>
                            <input type="text" placeholder="Descrição do material" name="descricaodoacao"" value="<?php echo $linha["descricaodoacao"];?>" required>
                        </div>
                        <div style="width: 77%; font-size: 15px;">Quantidade:</div>
                        <div>
                            <input type="number" placeholder="quantidade" name="quantidadedoacao"  value="<?php echo $linha["quantidadedoacao"];?>" required>
                        </div>
                        <div style="width: 76%; font-size: 15px;">Categoria:</div>
                        <input type="hidden" value="<?php echo $_SESSION['usuario'];?>" name="usuario">
                        <div>
                            <select name="tipo">

                                <?php
                        while ($linha = $result->fetch_array()){
                             ?>

                                <option value="<?php echo $linha['idcategoria']; ?>"selected>
                                <?php
                                echo $linha['titulocategoria'];

                                ?>
                                </option>
                                <?php
                            }
                            ?>
                            </select> 
                        </div>
                        
                        <button type="submit" name="editar">Editar</button>

                </form>
            </div>
    </div>
</body>
</html>