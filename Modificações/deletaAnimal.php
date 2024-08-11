<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Animal</title>
    <link rel="stylesheet" href="../Styles/style2.css">
</head>
<body>
    <h1>Deletar Animal</h1>
    <?php
        include('../Includes/conexao.php');
        $id = $_GET['id'];
        
        // Proteção contra SQL Injection (previne que caracteres especiais em uma entrada do usuário sejam interpretados como parte da instrução SQL)
        $id = mysqli_real_escape_string($con, $id);

        $sql = "DELETE FROM animal WHERE id = $id";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "<h2>Dados deletados com sucesso</h2>";
        } else {
            echo "<h2>Erro ao deletar dados</h2>";
            echo "<h2>" . mysqli_error($con) . "</h2>";
        }
    ?>
    <a href="../Pessoa/ListarAnimal.php">Voltar para a lista de Animais</a>
</body>
</html>
