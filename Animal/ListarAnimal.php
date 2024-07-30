<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Animais</title>
    <link rel="stylesheet" href="../Styles/style2.css">
</head>
<body>
    <?php
        include('../Includes/conexao.php');
        $sql = "SELECT * FROM animal";

        // Executa a consulta
        $result = mysqli_query($con, $sql);
    ?>

    <div class="container">
        <h1>Consulta de Animais</h1>
        <a href="CadastroAnimal.html">Cadastrar novo Animal</a><br>
        <a href="../index.html">Voltar para a Tela Inicial</a>

        <table class="animal-table">
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Raça</th>
                <th>Data de Nascimento</th>
                <th>Idade</th>
                <th>Castrado</th>
                <th>Id_pessoa</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php //mysqli_fetch_array lê uma linha por vez
                while($row = mysqli_fetch_array($result)){
                    $castrado = $row['castrado'] == 1 ? "Sim" : "Não";
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nome_animal']."</td>";
                    echo "<td>".$row['especie']."</td>";
                    echo "<td>".$row['raca']."</td>";
                    echo "<td>".$row['data_nascimento']."</td>";
                    echo "<td>".$row['idade']."</td>";
                    echo "<td>".$castrado."</td>";
                    echo "<td>".$row['id_pessoa']."</td>";
                    echo "<td><a href='alteraPessoa.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href='deletaPessoa.php?id=".$row['id']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
