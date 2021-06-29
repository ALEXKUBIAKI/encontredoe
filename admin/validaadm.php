<html>
 <head>
	<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
	<title>Painel Administrativo</title>
	  	 <link rel="stylesheet" href="css.css">
	  	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 </head>

<body>

	<fieldset>
		<div style="background-color:#B0E0E6;text-align:center">
			<p><font size="10">Painel Administrativo</font></p>
		</div>
		
		<br>
		
		  <?php  


session_start();
 

if(isset($_POST['usuarioadm'])) $loginadm = $_POST['usuarioadm'];
if(isset($_POST['senhaadm']))   $senhaadm = $_POST['senhaadm'];


if(isset($_SESSION['verificadoradm']))	if ($_SESSION['verificadoradm']==1)
		{
		
		echo " <div align='center'><p><b><font size='10'>Bem vindo Administrador: ".$_SESSION['nomedoadm']."</font></b></p> </div>";
		}

if(empty($_SESSION['verificadoradm']))
{
try {
 		//conexao
			//$conexao =new mysqli("localhost","root","","");	 ///*mysql usa essa conexão*///
			  $conexao = new PDO('mysql:host=localhost;dbname=encontredoe', "root", "");
	    //conexao
  
	} 
	catch (PDOException $e)
	{
		echo 'Falha na conexão: ' . $conexao->getMessage();
	}
		
	function encontrou($log,$pass)   // usei para testar se o usuario ja existe
		{   $conexao = new PDO('mysql:host=localhost;dbname=encontredoe', "root", "");
			$query = $conexao->prepare("select count(*)  as num from tb_usuarios_adm where loginusuario = '$log' and senhausuario ='$pass' ");
			$query->execute();
			$retorno =$query->fetch(PDO::FETCH_ASSOC);
 			
			if ($retorno['num'] ==1)
				{
					return 1;
				}
			else		 
			{
              return 0;
			}
		}	
		
		
		
	 	$linhas=encontrou($loginadm,$senhaadm);	
	
	    $result = $conexao->query("select * from tb_usuarios_adm where loginusuario='$loginadm' and senhausuario='$senhaadm'");
	
	if($linhas==1)
		{ 

			$data = array();
			while ($registros = $result->fetch(PDO::FETCH_ASSOC))

				{
					
					$_SESSION['nomedoadm'] = $registros["nomeusuario"];
					$_SESSION['idadm']     = $registros["idusuario"];
					$_SESSION['verificadoradm']=1;
					echo " <div align='center'><p><b><font size='10'>Bem vindo Administrador: ".$_SESSION['nomedoadm']."</font></b></p> </div>";
				}
		}       
		else
		{
		 echo"<script language='javascript' type='text/javascript'>alert('Nome do Administrador ou senha Inválida');
			window.location.href='index.php';</script>";
		}
echo "<p>";
}
	
?>

		<table align="center">
			<tr>


		</table>
		 <table align="center">
			<tr>
				<td><input type="button" value="Gerenciar Categorias" id="Escolhe Cursos" class="btn btn-lg btn-primary btn-block" onClick=location.href="gerenciacategorias.php" class="btlogin">
				<td><input type="button" value="Gerenciar Doações" id="Escolhe Cursos" class="btn btn-lg btn-primary btn-block" onClick=location.href="gerenciadoacao.php" class="btlogin">
				<td><input type="button" value="Sair" id="Logout" class="btn btn-lg btn-primary btn-block" onClick=location.href="logoutadm.php" class="btlogin">
			</tr>
			<p>
		</table>
		<br>
	</fieldset>
 </form>
 
	<div style="background-color:#B0E0E6;text-align:center">
		<p><font size="3">Todos direitos reservados a Alex Kubiaki - Mauricio Godoy - Pedro Henrique Schmidt - Matheus Hetkowski Stropper</font></p>
	</div>
	</body>
</html>