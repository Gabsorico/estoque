<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Tela inicial</title>
        <link rel="stylesheet" href="style/index.css">

        <style>
          body {
            margin: 0;
            padding: 0;
            background: linear-gradient(#042e87 , #430b7a);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
          }
        </style>


    <div class="login" >
        <h1 style="color: rgb(255, 255, 255)">TELA INICIAL</a></button></h1>
        <form method="post">
        <h3 colo><a href="cadastro.php" class="botao">Cadastrar</a></h3>
        <h3 colo><a href="login.php" class="botao">login</a></h3>
        <h3 colo><a href="tabela_item.php" class="botao">Visualizar itens</a></h3>
        <h3 colo><a href="tabela_chave.php" class="botao">Visualizar chaves</a></h3>
        <h3 colo><a href="logout.php" class="botao">logout</a></h3>
        </form>
    </div>

    <style>
        .login {
        position: absolute;
        top: 49%;
        left: 50%;
        margin: -150px 0 0 -150px;
        width:300px;
        height:300px;
        }
        .login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3);
        letter-spacing:1px; text-align:center; }
    </style>
</html>