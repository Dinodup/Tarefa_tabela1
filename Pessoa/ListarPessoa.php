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

        $sql = "SELECT p.id_pessoa, p.nome, p.email, p.endereco, p.bairro, p.cep, 
                       c.nome_cidade, c.estado 
                FROM pessoa p
                LEFT JOIN cidade c ON c.id = p.id_cidade;";

        $result = mysqli_query($con, $sql);

        if (!$result) {
            die('Erro na consulta: ' . mysqli_error($con));
        }
    ?>

    <div class="container">
        <h1>Consulta de Pessoas</h1>

        <table class="n-table">
            <tr>
                <th>ID Pessoa</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>CEP</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php 
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['id_pessoa']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['endereco']."</td>";
                    echo "<td>".$row['bairro']."</td>";
                    echo "<td>".$row['estado']."/".$row['nome_cidade']."</td>";
                    echo "<td>".$row['cep']."</td>";
                    echo "<td><a href='../Modificações/alteraPessoa.php?id=".$row['id_pessoa']."'>Alterar</a></td>";
                    echo "<td><a href='../Modificações/deletaPessoa.php?id=".$row['id_pessoa']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table><p></p>
        <a href="CadastroPessoa.php">Cadastrar nova Pessoa</a><br>
        <a href="../index.html">Voltar para a Tela Inicial</a>
    </div>
</body>
</html>
