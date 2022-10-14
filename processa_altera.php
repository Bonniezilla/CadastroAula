<?php

    if(isset($_COOKIE['nome']) && ($_COOKIE['nome'] != "")) {
        include_once "conexao.inc.php";
        $nomeAnterior = $_COOKIE['nome'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        $query = "UPDATE tabcliente00
                    set nome = '$nome',
                        idade = '$idade'
                        where nome = '$nomeAnterior'
        ";

        $result = mysqli_query($con, $query);

        if($result) {
            echo "Dados atualizados com sucesso";
        } else {
            echo "Erro - Não foi possível atualizar os dados";
        }
    } else {
        echo "Dados Inválidos";
    }
?>