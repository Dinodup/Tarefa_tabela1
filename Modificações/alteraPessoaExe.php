<?php
        include('../Includes/conexao.php');
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cep = $_POST['cep'];
        $id_cidade = $_POST['id_cidade'];

        echo "<h1>Dados da cidade</h1>";
        echo "Nome: $nome<br>";

        $sql = "UPDATE pessoa SET nome = '$nome', pmail = '$email', endereço = '$endereco', bairro = '$bairro', cep = '$cep', id_cidade = '$id_cidade' WHERE id = $id";
        echo $sql;

        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!!</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
?>