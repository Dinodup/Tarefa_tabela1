<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pessoas</title>
    <link rel="stylesheet" href="../Styles/style2.css">
</head>
<body>
    <?php
        include('../Includes/conexao.php');

        // Consulta SQL
        $sql = "SELECT * 
                from pessoa p
                left join cidade c on c.id = p.id_cidade;";

        // Executar a consulta
        $result = mysqli_query($con, $sql);

        // Verificar se a consulta foi bem-sucedida
        if (!$result) {
            die('Erro na consulta: ' . mysqli_error($con));
        }
    ?>

    <div class="container">
        <h1>Consulta de Pessoas</h1>

        <table class="n-table">
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>CEP</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php //mysqli_fetch_array lê uma linha por vez
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['endereco']."</td>";
                    echo "<td>".$row['bairro']."</td>";
                    echo "<td>".$row['estado']."/".$row['nome_cidade']."</td>";
                    echo "<td>".$row['cep']."</td>";
                    echo "<td><a href='../Modificações/alteraPessoa.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href='deletaPessoa.php?id=".$row['id']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table><p></p>
        <a href="CadastroPessoa.php">Cadastrar nova Pessoa</a><br>
        <a href="../index.html">Voltar para a Tela Inicial</a>
    </div>
</body>
</html>
