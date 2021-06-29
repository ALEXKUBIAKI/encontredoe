<?php
session_start();
//include('verificar_login.php');
include('conexao.php');

$_POST['pesquisar'] = ( isset($_POST['pesquisar']) ) ? $_POST['pesquisar'] : null;
$_POST['filtro'] = ( isset($_POST['filtro']) ) ? $_POST['filtro'] : null;

$pesquisa = $_POST['pesquisar'];
$filtro = $_POST['filtro'];
$usuario =$_SESSION['id'];
$sql = "SELECT * FROM tb_doacao WHERE titulodoacao LIKE '%$pesquisa%' AND fkcodcategoria LIKE '$filtro' and doador <> '$usuario' and tb_doacao.statusdoacao=0 and iddoacao not in (select fkdoacao from tb_itens_interesse inner join tb_doacao on tb_doacao.iddoacao=tb_itens_interesse.fkdoacao);";

$result = mysqli_query($conexao,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Itens</title>
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
        
        <table class="tabela" cellspacing="10" cellpadding="5">          
            <tr>
                <th>Doação</th>
                <th>Quantidade</th>
                <th>Descrição</th>
                <th>Ação</th>
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
                            echo $linha["descricaodoacao"];
                        ?>
                    </td>       
                    <td>
                        <a class="botoes" href="veja_mais.php?iddoacao=<?php echo $linha['iddoacao'];?>">Veja Mais</a>
                    </td>
                </tr>
            <?php }?>
        </table>
            
    </div>
</body>
</html>
