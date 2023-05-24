<?php
    require ("conn.php");

    if (isset($_GET['item'])){
        $item = $_GET['item'];
    }
    else{
        header("Location: tabela_item.php");
    }
    
    $tabela = $pdo->prepare("SELECT * FROM item WHERE id_item=:id_item;");
    $tabela->execute(array(':id_item'=>$item));
    $rowTable = $tabela->fetchAll();

?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
    <style>
		body {
			background-color: #f1f1f1;
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
		input[type="text"] {
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
	</style>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Cadastro de itens</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Edição de itens</h1>
            <br>
            <form action="CRUD/edit_item.php" method="post" id="formulario">
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">nome_item: </label>
                        <input type="text" name="nome_item" id="" class="form-control" value=<?php echo $rowTable[0]['nome_item']?>>
                    </div>
                </div>

                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">disponivel: </label>
                        <input type="text" name="disponivel_item" id="" class="form-control" value=<?php echo $rowTable[0]['disponivel_item']?>>
                    </div>
                </div>

                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">retornavel: </label>
                        <input type="text" name="retornavel" id="" class="form-control" value=<?php echo $rowTable[0]['retornavel']?>>
                    </div>
                </div>

                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">baixa: </label>
                        <input type="text" name="baixa" id="" class="form-control" value=<?php echo $rowTable[0]['baixa']?>>
                    </div>
                </div>

                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                       
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                       
                    </div>
                </div>
                <br>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-success" value="SALVAR ALTERAÇÕES">
                        <a href="tabela_item.php" type="button" class="btn btn-primary float-end">Tabela</a>
                    </div>
                </div>
                <input type="hidden" name='id_item' value="<?php echo $rowTable[0]['id_item']?>">
            </form>
            <div id="resultado"></div>
        </div>
        <script
        src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>