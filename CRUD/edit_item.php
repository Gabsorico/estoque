<?php
    require('../conn.php');

    $id_item = $_POST['id_item'];
    $nome_item = $_POST['nome_item'];
    $disponivel_item = $_POST['disponivel_item'];
    $retornavel = $_POST['retornavel'];
    $baixa = $_POST['baixa'];

    if(empty($id_item) || empty($nome_item) || empty($disponivel_item) || empty($retornavel) || empty($baixa)){
        echo "Os valores não podem ser vazios";
    } else {
        $edit_item = $pdo->prepare("UPDATE item SET nome_item = :nome_item, disponivel_item = :disponivel_item, retornavel = :retornavel, baixa = :baixa WHERE id_item = :id_item");

        $edit_item->execute(array(
            ':id_item' => $id_item,
            ':nome_item' => $nome_item,
            ':disponivel_item' => $disponivel_item,
            ':retornavel' => $retornavel,
            ':baixa' => $baixa,
        ));

        echo 'Editado com sucesso';
    }
?>
