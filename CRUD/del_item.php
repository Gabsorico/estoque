<?php
    require('../conn.php');

   if( isset($_GET['id_item'])){
        $item = $_GET['id_item'];
   }else{
        header("Location: ../tabela_item.php");
   }

   $del_item = $pdo->prepare('DELETE FROM item WHERE id_item=:id_item');
   $del_item->execute(array(':id_item'=>$item));

   echo "<script>alert('Item excluido'); window.history.back();</script>";
?>