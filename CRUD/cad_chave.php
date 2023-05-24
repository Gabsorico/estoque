<?php
    include ('../conn.php');

    $sala = $_POST['sala'];
    $disponivel_chave = $_POST['disponivel_chave'];
    $desaparecida = $_POST['desaparecida'];

    if(empty($sala) || empty($disponivel_chave) || empty($desaparecida)){
        echo "Voce precida preencher todos os campos";
    }else{
        $cad_chave = $pdo->prepare("INSERT INTO chave (sala, disponivel_chave, desaparecida) values (:sala, :disponivel_chave, :desaparecida)");
        $cad_chave->execute(array(
            ':sala'=>$sala,
            ':disponivel_chave'=>$disponivel_chave,
            ':desaparecida'=>$desaparecida,
        )
        );

        echo "<script>alert('Chave Cadastrada!')</script>";
    }
?>
