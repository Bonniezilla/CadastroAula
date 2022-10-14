<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Cadastro</title>
</head>
<body>
    <div align="center">
        <h1>DELETAR</h1>
        <hr>
        <br>
        <?php
        if(isset($_POST['nome']) && ($_POST['nome'] != "")) {
            include_once 'conexao.inc.php';

            $query = "SELECT nome, idade FROM tabcliente00 WHERE nome = '{$_POST['nome']}'";

            $result = mysqli_query($con, $query);

            if(mysqli_num_rows($result) > 0) {
            ?>
                <form action="processa_deletar.php" method="post">
                    <p>
                        <input type="text" name="nome">
                    </p>
                    <p>
                        <input type="submit" value="Deletar Cadastro">
                    </p>
                </form>
                <?php
            } else {
                echo "Erro - Não possível achar seu cadastro";
                ?>
                <form action="deletar.html">
                <p>
                    <input type="submit" value="Voltar a página anterior">
                </p>
            </form>
            <?php
            }
        } else {
                echo "Erro - Insira um nome<br>";
                ?>
                    <form action="deletar.html">
                        <p>
                            <button>Voltar para a página principal</button>
                        </p>
                    </form>
                <?php
            }
        ?>
    </div>
</body>
</html>