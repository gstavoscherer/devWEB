<?php

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if($login === "ifpr"){
        if($senha === "123"){
            echo "<p>Seja bem vindo à IFPR</p>";
        } else{
            echo "<p>senha inválida</p>";
        }
    } else {
        echo "<p>login inválido</p>";
    }
?>