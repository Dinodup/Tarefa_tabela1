<?php
    include('../Includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $id_cidade = $_POST['id_cidade'];
    $cep = $_POST['cep'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/style.css">
</head>
<body>
    <h1>Alteração de Cliente</h1>
    <?php
    echo "<p>Id: $id</p>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Endereço: $endereco</p>";
    echo "<p>Bairro: $bairro</p>";
    echo "<p>Id da Cidade: $id_cidade</p>";
    echo "<p>CEP: $cep</p>";
    $sql = "UPDATE pessoa SET
                nome = '$nome',
                email = '$email',
                endereco = '$endereco',
                bairro = '$bairro',
                id_cidade = '$id_cidade',
                cep = '$cep'
            WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados atualizados";
    else
        echo "Erro ao atualizar dados\n"
        .mysqli_error($con);
    ?>
    <p></p>
    <a href="ListarPessoa.php">Voltar</a>
</body>
</html>