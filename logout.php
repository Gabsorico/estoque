<?php

    if(!isset($_SESSION)) {
        session_start();
    }
    echo "<script>alert('Você saiu com sucesso');window.history.back();</script>";
    session_destroy();


?>