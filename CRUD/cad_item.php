<?php

    require('../conn.php');

    $nome_item = $_POST['nome_item'];
    $disponivel_item = $_POST['disponivel_item'];
    $retornavel = $_POST['retornavel'];
    $baixa = $_POST['baixa'];

    if(empty($nome_item) || empty($disponivel_item) || empty($retornavel) || empty($baixa)) {

        echo "Os valores nao podem ser vazios";

    }else{
        $cad_item = $pdo->prepare("INSERT INTO item(nome_item, disponivel_item , retornavel , baixa) VALUES (:nome_item , :disponivel_item , :retornavel , :baixa)");
        $cad_item->execute(array(
            ':nome_item'=>$nome_item,
            ':disponivel_item'=> $disponivel_item,
            ':retornavel' => $retornavel,
            ':baixa' => $baixa,
                
        ));
        echo "<script>alert('cadastrado');window.location.href:'../index.php'</script>";
        
    }
?>