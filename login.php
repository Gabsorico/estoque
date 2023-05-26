<!DOCTYPE html>
<html>
	<head>
		<title>Página de Login</title>
		<link rel="stylesheet" href="style/cad_log.css">
		<style>
			body {
				background: url('img/login.jpg');
				background-size: cover;
				font-family: Arial, sans-serif;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Login</h1>
			<form action="logar.php" method='post'>
				<label for="">email</label>
				<input type="text" name="email" id="">
				<label for="">Senha</label>
				<input type="password" name="senha" id="">
				<input type="submit" value="Login">
			</form>
			<br>
				<a href="index.php" class="btn btn-primary">VOLTAR</a>
				<a href="cadastro.php" class="sim">Já tem cadastro?</a>
		</div>
</html>