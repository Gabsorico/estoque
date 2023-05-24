<!DOCTYPE html>
<html>
	<head>
		<title>Página de cadastro</title>
		<style>
			body {
				background: url('img/cadastro_ft.jpg');
				background-size: cover;
				font-family: Arial, sans-serif;
			}
			.container {
				background-color: #e8fdff;
				padding: 20px;
				margin: 50px auto;
				width: 400px;
				box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
				border-radius: 40px;
			}
			h1 {
				text-align: center;
				margin-top: 0;
			}
			form {
				display: flex;
				flex-direction: column;
			}
			label {
				margin-bottom: 10px;
			}
			input[type="text"], input[type="password"], input[type="email"] {
				padding: 10px;
				margin-bottom: 20px;
				border-radius: 5px;
				border: none;
			}
			input[type="submit"] {
				background-color: #4CAF50;
				color: white;
				border: none;
				border-radius: 10px;
				padding: 10px;
				cursor: pointer;
				font-size: 16px;
			}
			input[type="submit"]:hover {
				background-color: #3e8e41;
			}
			.btn {
			background-color: #ff4f4f;
			color: white;
			padding: 10px 30px;
			text-decoration: none;
			border-radius: 10px;
			}
			.btn:hover {
				background-color: #b83535;
			}
			
			.sim {
			background-color: #46aae3;
			color: white;
			padding: 10px 30px;
			text-decoration: none;
			border-radius: 10px;
			}
			.sim:hover {
				background-color: #3b7ca1;
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