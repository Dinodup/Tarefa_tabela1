<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Pessoa</title>
    <link rel="stylesheet" href="../Styles/style3.css">
</head>
<body>
    <?php
        include('../Includes/conexao.php');
        $id_pessoa = $_POST['id_pessoa'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $id_cidade = $_POST['id_cidade'];

        $sql = "UPDATE pessoa SET nome = '$nome', email = '$email', endereco = '$endereco', bairro = '$bairro', cep = '$cep', id_cidade = '$id_cidade' WHERE id_pessoa = $id_pessoa";
        
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<h2>Dados alterados com sucesso!</h2>";
        } else {
            echo "<h2>Erro ao alterar dados!</h2>";
            echo mysqli_error($con);
        }
    ?>
    <a href="../Pessoa/ListarPessoa.php">Voltar para a lista de Pessoas</a>
</body>
</html>
