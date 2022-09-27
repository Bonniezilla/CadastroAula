<?php
    if($_POST['cnome'] != '') {
        include_once 'conexao.inc.php';
        $nome = $_POST['cnome'];
        $idade = $_POST['cidade'];

        $sql = "INSERT INTO tabcliente00 (nome, idade) VALUES ('$nome', '$idade')";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "Dados cadastrados com sucesso!";
        } else {
            echo "Erro - Dados não cadastrados: $sql";
        }
    } else {
        echo "Erro - Dados inválidos";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="cadastro.html">
        <input type="submit" value="Voltar para a página principal">
    </form>
</body>
</html>