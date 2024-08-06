<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cidades</title>
    <link rel="stylesheet" href="../Styles/style2.css">
</head>
<body>
    <?php
        include('../Includes/conexao.php');

        // Consulta SQL
        $sql = "SELECT id, nome_cidade, estado
                FROM cidade";

        // Executa a consulta
        $result = mysqli_query($con, $sql);

        // Verificar se a consulta foi bem-sucedida
        if (!$result) {
            die('Erro na consulta: ' . mysqli_error($con));
        }
    ?>

    <div class="container">
        <h1>Consulta de Cidades</h1>
        <a href="CadastroCidade.php">Cadastrar nova Cidade</a><br>
        <a href="../index.html">Voltar para a Tela Inicial</a>

        <table class="n-table">
            <tr>
                <th>id</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php //mysqli_fetch_array lê uma linha por vez
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome_cidade']."</td>";
                    echo "<td>".$row['estado']."</td>";
                    echo "<td><a href='alteraCidade.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href='deletaCidade.php?id=".$row['id']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
