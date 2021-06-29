<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UACompatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</head>
<body>
    <div style="background-color:#B0E0E6;text-align:center">
        <p><font size="10">ENCONTRE E DOE</font></p>
    </div>
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
             <?php  if(isset($_SESSION['cpf_em_uso'])): endif;?>
                
            <div>
                <p>Este CPF já está em uso!</p>
            </div>
             
        <?php  
            endif; 
            unset($_SESSION['email_em_uso']);
        ?>

        <div class="form">
            <div>
                <h2>Cadastre-se</h2>
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
                        <a href="index2.php">Já possui uma conta? Entre</a> 
                    </div><br>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Cadastrar</button>

            </form>
        </div>
    </div>
        <div style="background-color:#B0E0E6;text-align:center">
        <p><font size="3">Todos direitos reservados a Alex Kubiaki - Mauricio Godoy - Pedro Henrique Schmidt - Matheus Hetkowski Stropper</font></p>
    </div>
</body>
</html>