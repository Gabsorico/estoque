<?php
    require("config.php");
    require("conn.php");


    $tabela = $pdo->prepare("SELECT id_chave, sala,disponivel_chave, desaparecida FROM chave;");
    $tabela->execute();
    $rowTabela = $tabela->fetchAll();
   
    if (empty($rowTabela)){
        echo "<script>
        alert('Tabela vazia!!!');
        </script>";
    }

?>


<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
    <style>
        body {
            background-color: #efd9ff;
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
        .btn-verde {
        background-color: green;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Tabela de chaves</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">CHAVES</h1>
            <br>  
        <table class="table">
            <thead>
                <tr>
                <th scope="col">CADASTRADAS</th>
                <th scope="col">DISPONÍVEL</th>
                <th scope="col">DESAPARECIDA</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($rowTabela as $linha){
                        echo '<tr>';
                        echo "<th scope='row'>".$linha['sala']."</th>";
                        echo "<td>".$linha['disponivel_chave']."</td>";
                        echo "<td>".$linha['desaparecida']."</td>";
                        
                        echo '<td><a href=edit_table_chave.php?chave='.$linha['id_chave'].' class="btn btn-warning">Editar</a></td>';
                        echo '<td><a href=CRUD\del_chave.php?id_chave='.$linha['id_chave'].' class="btn btn-danger">Excluir</a></td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">VOLTAR</a>
        <a href="cadastro_chave.php" class="btn-verde">Cadastrar</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>