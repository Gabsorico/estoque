<!DOCTYPE html>
<html>
	<head>
		<title>Página de cadastro</title>
		<link rel="stylesheet" href="style/cad_log.css">
		<style>
			body {
				background: url('img/cadastro_ft.jpg');
				background-size: cover;
				font-family: Arial, sans-serif;
			}
			
		</style>
	</head>
	<body>
		<div class="container">
			<h1>CADASTRAR</h1>
			<form action="CRUD/cad_user.php" method="post">
				<label for="name">Nome Completo</label>
				<input type="text" id="" name="name_user">

				<label for="name">Email</label>
				<input type="text" id="" name="email">

				<label for="password">Senha:</label>
				<input type="password" id="" name="senha">
				<input type="submit" value="Registrar">
			</form>
			<br>
				<a href="index.php" class="btn btn-primary">VOLTAR</a>
				<a href="login.php" class="sim">Já tem login?</a>
		</div>
	</body>
</html>