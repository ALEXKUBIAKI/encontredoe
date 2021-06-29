<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <link rel="stylesheet" href="index2.php">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

            <div style="background-color:#B0E0E6;text-align:center">
            <p><font size="10">ENCONTRE E DOE</font></p>
        </div>
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
                <h2>Login</h2>
            </div>
            <form action="login.php" method="POST">
                <div>
                    <input type="text" placeholder="Usuário" name="usuario" required>
                </div>
                <div>
                    <input type="password" placeholder="Senha" name="senha" required>
                </div>

                <button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
                <div>
                    <br>
                    <a href="cadastro.php">Não tem uma conta? Cadastre-se</a>
                </div>
            </form>
        </div>
    </div>
        <div style="background-color:#B0E0E6;text-align:center">
        <p><font size="3">Todos direitos reservados a Alex Kubiaki - Mauricio Godoy - Pedro Henrique Schmidt - Matheus Hetkowski Stropper</font></p>
    </div>
</body>
</html>