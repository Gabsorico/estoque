<?php
    require('../conn.php');

   if( isset($_GET['id_chave'])){
        $chave = $_GET['id_chave'];
   }else{
        header("Location: ../tabela_chave.php");
   }

   $del_chave = $pdo->prepare('DELETE FROM chave WHERE id_chave=:id_chave');
   $del_chave->execute(array(':id_chave'=>$chave));

   echo "<script>alert('Chave excluída'); window.history.back();</script>";

?>