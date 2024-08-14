<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Pessoa</title>
    <link rel="stylesheet" href="../Styles/style2.css">
</head>
<body>
    <h1>Deletar Pessoa</h1>
    <?php
        include('../Includes/conexao.php');
        $id_pessoa = $_GET['id'];
        
        $id_pessoa = mysqli_real_escape_string($con, $id_pessoa);

        $sql = "DELETE FROM pessoa WHERE id_pessoa = $id_pessoa";
        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "<h2>Dados deletados com sucesso!</h2>";
        } else {
            echo "<h2>Erro ao deletar dados!</h2>";
            echo mysqli_error($con);
        }
    ?>
    <a href="../Pessoa/ListarPessoa.php">Voltar para a lista de Pessoas</a>
</body>
</html>
