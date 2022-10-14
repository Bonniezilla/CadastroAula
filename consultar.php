    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AGENDA</title>
    </head>
    <body>
        <h1 align="center">CONSULTA</h1>
        <hr>
        <br>

<?php
    if(isset($_POST['cnome'])) {
        include_once 'conexao.inc.php';

        $sql = "SELECT nome, idade FROM tabcliente00 WHERE nome = '{$_POST['cnome']}';";

        $resultado = mysqli_query($con, $sql);
        
        ?>
        <table>
            <tr>
                <td width="200">Nome</td>
                <td width="80">Idade</td>
            </tr>
            <?php
    while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
        <tr>
            <td><?= $row['nome'];?></td>
            <td align="center"><?= $row['idade'];?></td>
        </tr>
        <?php
    }
}
    ?>
        </table>
        <br>
        <form action="consultar.php" method="post">
            <p>
                Nome: <input type="text" name="cnome">
            </p>
            <input type="submit" value="Consultar Cadastro">
        </form>
        <form action="cadastro.html">
            <button>Voltar para a página principal</button>
        </form>
    </body>
</html>