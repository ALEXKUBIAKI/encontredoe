<?php


session_start();
include('verificar_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
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
            <a href="sobre_doador.php" style="border-bottom:3px solid white;">Sobre</a>
        </li>
        
        <li class="user-item">
            <a href="logout.php">Sair</a>
        </li>   
                <li class="user-item">
            <a href="usuario.php">Meu Perfil </a>
        </li>
    </ul>

    <div class="content">

        <div class="sobre">
            <p> Este projeto tem como ideia promover a ligação entre pessoas que querem doar algum objeto, vestimenta, alimento, ou outro mantimento com pessoas que desejam receber doações. <br>
            Foi desenvolvido por Alex Kubiaki dos Santos, Mauricio de Avila Godoy, Pedro Henrique Schmidt e Matheus Hetkowski Stropper     
            </p>
            <p> Ulbra - Universidade Luterana do Brasil - Análise e Desenvolvimento de Sistemas - 2021/1</p>
        </div>
    </div>


</body>
</html>