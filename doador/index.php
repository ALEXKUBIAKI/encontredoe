<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="content">

        <?php  if(isset($_SESSION['nao_autenticado'])):  ?>
            <div>
                <p>Usuário ou Senha incorretos!</p>
            </div>
        <?php  
            endif; 
            unset($_SESSION['nao_autenticado']);
 
        ?>


        <div class="form">
            <div>
                <h2>Encontre e doe - Login doador</h2>
            </div>
            <form action="login.php" method="POST">
                <div>
                    <input type="text" placeholder="Usuário" name="usuario" required>
                </div>
                <div>
                    <input type="password" placeholder="Senha" name="senha" required>
                </div>
                <div>
                    <a href="cadastro.php">Não tem uma conta? Cadastre-se</a>
                </div>
                <button type="submit">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>