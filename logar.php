<?php
session_start();

include("conn.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = $pdo->prepare('SELECT * FROM usuario WHERE email=:email AND senha=:senha');
$usuario->execute(array(':email' => $email, ':senha' => $senha));

$rowTabela = $usuario->fetchAll();

if (empty($rowTabela)) {
    echo "<script>alert('Usuário e/ou senha inválidos!');</script>";
} else {
    $sessao = $rowTabela[0];

    if (!isset($_SESSION)) {
        // Inicia a sessão
    }

    $_SESSION['id_user'] = $sessao['id_user'];
    $_SESSION['name_user'] = $sessao['name_user'];

    echo "<script>alert('Login feito com sucesso!');</script>";
    echo "<script>window.location.href = 'index.php';</script>";
    exit();
}
?>