<?php

   $conexao = mysqli_connect("localhost:3310", "root", "");

    $bd = mysqli_select_db($conexao, "projeto1");

    if(!$conexao){
        echo "Conexão com banco de dados falhou!";
    }
