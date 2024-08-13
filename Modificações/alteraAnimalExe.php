<?php
    include('../Includes/conexao.php');
    $id_animal = $_POST['id_animal'];
    $nome_animal = $_POST['nome_animal'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $data_nascimento = $_POST['data_nascimento'];
    $castrado = isset($_POST['castrado']) ? 1 : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Animal</title>
    <link rel="stylesheet" href="../Styles/style3.css">
</head>
<body>
    <h1>Alteração de dados do Animal</h1>
    <?php
    echo "<p>ID Animal: $id_animal</p>";
    echo "<p>Nome: $nome_animal</p>";
    echo "<p>Espécie: $especie</p>";
    echo "<p>Raça: $raca</p>";
    echo "<p>Data de Nascimento: $data_nascimento</p>";
    echo "<p>Castrado: ".($castrado ? 'Sim' : 'Não')."</p>";

    $sql = "UPDATE animal SET
                nome_animal = '$nome_animal',
                especie = '$especie',
                raca = '$raca',
                data_nascimento = '$data_nascimento',
                castrado = '$castrado'
            WHERE id_animal = $id_animal";
    $result = mysqli_query($con, $sql);

    if($result) {
        echo "Dados atualizados com sucesso!";
    } else {
        echo "Erro ao atualizar os dados: " . mysqli_error($con);
    }
    ?>
    <p></p>
    <a href="../Animal/ListarAnimal.php">Voltar</a>
</body>
</html>
