<?php

    require('../conn.php');

    $id_chave = $_POST['id_chave'];
    $sala = $_POST['sala'];
    $disponivel_chave = $_POST['disponivel_chave'];
    $desaparecida = $_POST['desaparecida'];

    if(empty($id_chave) || empty($sala) || empty($disponivel_chave) || empty($desaparecida)){
        echo "Os valores não podem ser vazios";
    }else{
        $edit_chave = $pdo->prepare("UPDATE chave SET sala = :sala, disponivel_chave = :disponivel_chave, desaparecida = :desaparecida WHERE id_chave = :id_chave;");

    $edit_chave->execute(array(
        ':id_chave' => $id_chave,
        ':sala'=> $sala,
        ':disponivel_chave'=> $disponivel_chave,
        ':desaparecida'=> $desaparecida,
    ));

    echo 'Editado com sucesso';
    }
?>