<?php

session_start();
?>
-
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UACompatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="content">
        <?php  if(isset($_SESSION['cadastro'])):  ?>
            <div>
                <p>Cadastro efetuado com sucesso!</p>
            </div>
            <div>
                <a href="login.php">Acesse sua nova conta!</a>
            </div>
        <?php  
            endif; 
            unset($_SESSION['cadastro']);
        ?>

        <?php  if(isset($_SESSION['usuario_existe'])):  ?>
            <div>
                <p>Este nome de usuário já está em uso!</p>
            </div>
        <?php  
            endif; 
            unset($_SESSION['usuario_existe']);
        ?>

        <?php  if(isset($_SESSION['email_em_uso'])):  ?>
            <div>
                <p>Este e-mail já está em uso!</p>
            </div>
        <?php  
            endif; 
            unset($_SESSION['email_em_uso']);
        ?>

        <div class="form">
            <div>
                <h2>CADASTRE-SE</h2>
            </div>
            <form action="cadastrar.php" method="POST">
                    <div>
                        <input type="text" placeholder="Nome" name="nomeusuario" required>
                    </div>
                    <div>
                        <input type="text" placeholder="Usuário" name="loginusuario"  required>
                    </div>
                    <div>
                        <input type="email" placeholder="E-mail" name="emailusuario"  required>
                    </div>
                    <div>
                        <input type="text" placeholder="Telefone de contato" name="telefoneusuario" required>
                    </div>
                    <div>
                        <input type="number" placeholder="Idade" min="18" max="100"  name="idadeusuario"  required>
                    </div>
                    <div>
                        <input type="text" placeholder="Endereço" name="enderecousuario" required>
                    </div>					
                    <div>
                        <input type="text" placeholder="Cidade" name="cidadeusuario" required>
                    </div>
                    <div>
                        <input type=text placeholder="CPF"id="cpf" name="cpfusuario" size="11" required>
                    </div>
                    <div>
                        <input type="password" placeholder="Senha" name="senhausuario" required>
                    </div>
                    <div>
					<!-- O segundo valor estará selecionado inicialmente -->
					 <a>Tipo de usuário<br/a>
					<select name="tipousuario">
					  <option value="0">Doador</option>
					  <option value="1" selected>Receptor</option>
					</select>
                    </div>
                    <div>
                        <a href="index.php">Já possui uma conta? Entre</a>
                    </div>
                    <button type="submit">Cadastrar</button>

            </form>
        </div>
    </div>
</body>
</html>