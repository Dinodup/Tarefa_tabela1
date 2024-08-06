<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/style3.css">
</head>
<body>
    <?php
    include('../Includes/conexao.php');

    $nome_cidade = $_POST['nome_cidade'];
    $estado = $_POST['estado'];

    echo "<h1>Dados da cidade</h1>";
    echo "Nome da cidade: $nome_cidade<br>";
    $sql = "INSERT INTO cidade (nome_cidade, estado)";
    $sql .= " VALUES('".$nome_cidade."','".$estado."')";
    echo $sql;

    $result = mysqli_query($con,$sql);
    if($result){
        echo "<h2>Dados cadastrados com sucesso!!</h2>";
    }
    else{
        echo "<h2>Erro ao cadastrar!</h2>";
        echo mysqli_error($con);
    }
    ?>
    <h3>Ver na <a href="ListarCidade.php">Tabela</a></h3>
    <h3><a href="CadastroCidade.php">Voltar</a></h3>
</body>
</html>