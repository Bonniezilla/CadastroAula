<?php
    if(isset($_POST['nome']) && ($_POST['nome']) != "") {
        include_once "conexao.inc.php";

        $query = "DELETE FROM tabcliente00 WHERE nome = '{$_POST['nome']}'";

        $result = mysqli_query($con, $query);
        
        echo "Cadastro deletado com sucesso";
    } else {
        echo "Erro - Dados não válidos";
    }
?>