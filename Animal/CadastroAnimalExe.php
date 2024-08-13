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
    $nome_animal = $_POST['nome_animal'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $data_nascimento = $_POST['data_nascimento'];
    $castrado = $_POST['castrado'];
    $id_pessoa = $_POST['id_pessoa'];

    // Calcula a idade do animal (em anos)
    $data_nasc = new DateTime($data_nascimento);
    $data_atual = new DateTime();
    $idade = $data_atual->diff($data_nasc)->y;

    if($castrado != 1) {
        $castrado = 0;
    }

    echo "<h1>Dados do Animal</h1>";
    echo "Nome: $nome_animal<br>";
    echo "Especie: $especie<br>";
    echo "Raça: $raca<br>";
    echo "Data do Nascimento: $data_nascimento<br>";
    echo "Idade: $idade anos<br>";
    echo "Situação: $castrado<br>";
    echo "Id da Pessoa: $id_pessoa<br>";

    // Insere a data de nascimento corretamente
    $sql = "INSERT INTO animal (nome_animal, especie, raca, data_nascimento, castrado, id_pessoa)";
    $sql .= " VALUES('".$nome_animal."','".$especie."','".$raca."','".$data_nascimento."','".$castrado."',".$id_pessoa.")";
    echo $sql;

    // Executa comando no banco de dados
    $result = mysqli_query($con,$sql);
    if($result){
        echo "<h2>Dados cadastrados com sucesso!</h2>";
    }
    else{
        echo "<h2>Erro ao cadastrar</h2>";
        echo mysqli_error($con);
    }
?>

    <h3>Ver na <a href="ListarAnimal.php">Tabela</a></h3>
    <h3><a href="CadastroAnimal.php">Voltar</a></h3>
</body>
</html>