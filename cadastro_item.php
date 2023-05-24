<!DOCTYPE html>
<html>
	<head>
		<title>Página de cadastro</title>
		<style>
			body {
				background-color: paleturquoise;
				font-family: Arial, sans-serif;
			}
			.container {
				background-color: #ffffff;
				padding: 20px;
				margin: 50px auto;
				width: 400px;
				box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
				border-radius: 5px;
				padding: 10px;
				cursor: pointer;
				font-size: 16px;
			}
			input[type="submit"]:hover {
				background-color: #3e8e41;
			}
			.btn {
			background-color: red;
			color: white;
			padding: 10px 30px;
			text-decoration: none;
			border-radius: 4px;
			}
			
		</style>
	</head>
	<body>
		<div class="container">
			<h1>CADASTRAR ITEM</h1>
			<form action="CRUD/cad_item.php" method="post">
				<label for="name">nome_item</label>
				<input type="text" id="" name="nome_item">

				<label for="name">disponivel_item</label>
				<input type="text" id="" name="disponivel_item">

				<label for="name">retornavel:</label>
				<input type="text" id="" name="retornavel">

                <label for="name">baixa:</label>
				<input type="text" id="" name="baixa">
				<input type="submit" value="Registrar">
			</form>
			<button><a href="index.php" class="btn btn-primary">VOLTAR</a></button>
		</div>
	</body>
</html>