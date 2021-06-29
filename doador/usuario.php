<?php
session_start();
include('verificar_login.php');
include('conexao.php');


$id = $_SESSION['id'];

$query = "SELECT idusuario,nomeusuario,loginusuario,emailusuario,telusuario,idadeusuario,senhausuario,enderecousuario,cidadeusuario,cpfusuario FROM tb_usuarios WHERE idusuario = '{$id}'";


$result = mysqli_query($conexao,$query);
$linha = $result->fetch_array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="font-family: Verdana;">

    <ul class="nav">

        <li class="nav-item">
            <a href="cadastro_excedente.php">Cadastrar Doação</a>
        </li>
        <li class="nav-item">
            <a href="lista_excedentes.php">Itens Cadastrados</a>
        </li>
        <li class="nav-item">
            <a href="sobre_doador.php">Sobre</a>
        </li>
        
        <li class="user-item">
            <a href="logout.php">Sair</a>
        </li>   
            <li class="user-item">
            <a href="usuario.php" style="border-bottom:3px solid white;">Meu Perfil </a>
        </li>
    </ul>
    <div class="content">

       
        <div class="form">
                <div>
                    <h2>Minhas Informações</h2>
                </div>
                <form action="editar_usuario.php" method="POST">
                        <input type="hidden" name="id_usuario" value="<?php echo $linha["idusuario"];?>">
                        <div>
                            <input type="text" placeholder="Nome" name="nome" value="<?php echo $linha["nomeusuario"];?>" required>
                        </div>
                        <div>
                            <input type="email" placeholder="E-mail" name="email"  value="<?php echo $linha["emailusuario"];?>" required>
                        </div>
                        <div>
                            <input type="text" placeholder="Telefone de contato" name="telefone" value="<?php echo $linha["telusuario"];?>" required>
                        </div>
                        <div>
                            <input type="number" placeholder="Idade" min="18" max="100"  name="idade" value="<?php echo $linha["idadeusuario"];?>" required>
                        </div>
                        <div>
                            <input type="text" placeholder="Endereço" name="endereco" value="<?php echo $linha["enderecousuario"];?>" required>
                        </div>                      
                        <div>
                            <input type="text" placeholder="Cidade" name="cidade" value="<?php echo $linha["cidadeusuario"];?>" required>
                        </div>  
                        <div>
                            <input type="text" placeholder="CPF" name="cpf" value="<?php echo $linha["cpfusuario"];?>" required>
                        </div>                          
                        <div>
                            <input type="password" placeholder="Senha" name="senha" value="<?php echo $linha["senhausuario"];?>" required>
                        </div>

                        <button type="submit">Editar</button>

                </form>
            </div>
    </div>
    


</body>
</html>