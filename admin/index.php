<html>
 <head>
	<meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
	<title>Formulário de Login</title>
	  	 <link rel="stylesheet" href="css.css">
	  	 	  	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	  	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	  	 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 </head>

<body>
	<div clas="form">
  <form action="validaadm.php" method="POST">
	<fieldset>
		<div style="background-color:#B0E0E6;text-align:center">
			<p><font size="10">ENCONTRE E DOE</font></p>
		</div>
		
		<br>
		 <h2 align="center">Painel Administrativo</h2>
		<table align="center">
			<tr>
				<td><input type=text id="usuarioadm" name="usuarioadm" placeholder="Usuário" required>
			</tr>
			
			<tr>
				<td><input type=password id="senhaadm" name="senhaadm" placeholder="Senha" required>
			</tr>
		</table>
		 <table align="center">
			<tr>
				<td><input type="submit" value="Continuar" id="continuar" class="btn btn-lg btn-primary btn-block">
				</tr>
				<p>
		</table>
		<br>
	</fieldset>
 </form>
 </div>

	<div style="background-color:#B0E0E6;text-align:center">
		<p><font size="3">Todos direitos reservados a Alex Kubiaki - Mauricio Godoy - Pedro Henrique Schmidt - Matheus Hetkowski Stropper</font></p>
	</div>
	</body>
</html>
