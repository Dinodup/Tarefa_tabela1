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

    <div class="container">
        <h1>Consulta de Animais</h1>
        <a href="CadastroAnimal.php">Cadastrar novo Animal</a><br>
        <a href="../index.html">Voltar para a Tela Inicial</a>

        <?php
            include('../Includes/conexao.php');

            $sql = "SELECT a.id_animal, a.nome_animal, a.especie, a.raca, a.data_nascimento, 
                           a.castrado, a.id_pessoa, p.nome AS nome_dono 
                    FROM animal a
                    LEFT JOIN pessoa p ON p.id_pessoa = a.id_pessoa;";

            $result = mysqli_query($con, $sql);

            if (!$result) {
                die('Erro na consulta: ' . mysqli_error($con));
            }

            echo "<table class='n-table'>";
            echo "<tr><th>ID</th><th>Nome</th><th>Espécie</th><th>Raça</th><th>Data de Nascimento</th><th>Idade</th><th>Castrado</th><th>Dono</th><th>Alterar</th><th>Deletar</th></tr>";

            while($row = mysqli_fetch_array($result)){
                $data_nasc = new DateTime($row['data_nascimento']);
                $data_atual = new DateTime();
                $idade = $data_atual->diff($data_nasc)->y;

                echo "<tr>";
                echo "<td>".$row['id_animal']."</td>";
                echo "<td>".$row['nome_animal']."</td>";
                echo "<td>".$row['especie']."</td>";
                echo "<td>".$row['raca']."</td>";
                echo "<td>".$row['data_nascimento']."</td>";
                echo "<td>".$idade." anos</td>";
                echo "<td>".($row['castrado'] ? 'Sim' : 'Não')."</td>";
                echo "<td>".$row['nome_dono']."</td>";
                echo "<td><a href='../Modificações/alteraAnimal.php?id_animal=".$row['id_animal']."'>Alterar</a></td>";
                echo "<td><a href='../Modificações/deletaAnimal.php?id_animal=".$row['id_animal']."'>Deletar</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </div>
</body>
</html>
