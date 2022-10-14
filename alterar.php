<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div class="main">
            <h1>ALTERAÇÃO</h1>
            <hr>
            <br>
            <?php
            if(isset($_POST['nome']) && ($_POST['nome'] != "")) {
                include_once 'conexao.inc.php';
                
                $query = "SELECT nome, idade from tabcliente00 where nome = '{$_POST['nome']}'";
                
                $result = mysqli_query($con, $query);
                
                if(mysqli_num_rows($result) > 0) {
                    $dados = mysqli_fetch_assoc($result);
                    ?>
            <form class="form" action="processa_altera.php" method="post">
                <p>
                    Nome: <input type="text" name="nome" value="<?= $dados['nome']; ?>">
                </p>
                <?php
                    setcookie('nome', $_POST['nome']);
                ?>
                <p>
                    Idade: <input type="text" name="idade" value="<?= $dados['idade']; ?>">
                </p>
                    <button>Alterar</button>
            </form>
                <?php
                } else {
                    echo "Nome não encontrado";
                }
            } else {
                echo "Insira um nome<br>";
                ?>
                <?php
            }
            ?>
            <button id="buttonEl">Voltar para a página principal</button>
        </div>
    </body>
</html>