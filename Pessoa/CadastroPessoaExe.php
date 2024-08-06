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
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $id = $_POST['id'];

        echo "<h1>Dados da Pessoa</h1>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "Endereço: $endereco<br>";
        echo "Bairro: $bairro<br>";
        echo "ID da cidade: $id<br>";
        echo "CEP: $cep<br>";

        $sql = "INSERT INTO pessoa (nome, email, endereco, bairro, id, cep)";
        $sql .= " VALUES('".$nome."','".$email."','".$endereco."','".$bairro."','".$id."','".$cep."')";
        echo $sql;

        //executa comando no banco de dados
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else{
            echo "<h2>Erro ao cadastrar</h2>";
            echo mysqli_error($con);
        }
    ?>
    <h3>Ver na <a href="ListarPessoa.php">Tabela</a></h3>
    <h3><a href="CadastroPessoa.html">Voltar</a></h3>
</body>
</html>