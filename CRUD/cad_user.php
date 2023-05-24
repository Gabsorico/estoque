<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    include('../conn.php');

    if(isset($_POST['name_user']) && isset($_POST['email']) && isset($_POST['senha'])){
        $name_user = $_POST['name_user'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(empty($name_user) || empty($email) || empty($senha)){
            echo "Os valores não podem ser vazios";
        } else {
            $cad_user = $pdo->prepare("INSERT INTO usuario (name_user, email, senha) 
            VALUES (:name_user, :email, :senha)");
            $cad_user->execute(array(
                ':name_user' => $name_user,
                ':email' => $email,
                ':senha' => $senha,
            ));
            echo "<script>alert('cadastrado');window.location.href='../login.php'</script>";
        }
    } else {
        echo "Os campos não foram enviados corretamente";
    }
?>
