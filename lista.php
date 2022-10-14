<?php
    include_once 'conexao.inc.php';

    $sql = 'select nome, idade from tabcliente00 order by nome';

    $resultado = mysqli_query($con, $sql);
    
?>
    
    <!DOCTYPE html>
        <head>
        <title>Agenda</title>
        </head>
        <body>
            <h1>NOMES CADASTRADOS</h1>
            <hr>
            <br>
            <table>
                <tr>
                    <td width="200">Nome</td>
                    <td width="80">Idade</td>
                </tr>
        </body>
    </html>

<?php
    while ($linha = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?= $linha['nome']; ?></td>
            <td align="center"><?= $linha['idade']; ?> </td>
        <tr>
            <?php
    }
    
    ?>
            </table>
        </div>
        <form action="cadastro.html">
            <button>Voltar para a página principal</button>
        </form>
    </body>
</html>
