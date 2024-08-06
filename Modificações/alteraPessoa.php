<?php
    include('../Includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM pessoa WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Styles/style1.css">
</head>
<body>
    <form action="../Modificações/alteraCidadeExe.php" method="post">
    <fieldset>
        <legend>Cadastro de Pessoa</legend>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"
                    value="<?php echo $row['nome']?>">
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email"
                    value="<?php echo $row['email']?>">
        </div>
        <div>
            <label for="endereco">Endereço: </label>
            <input type="text" name="endereco" id="endereco"
                    value="<?php echo $row['endereco']?>">
        </div>
        <div>
            <label for="bairro">Bairro: </label>
            <input type="text" name="bairro" id="bairro"
                    value="<?php echo $row['bairro']?>">
        </div>

        <div>
            <label for="id_cidade">Id da Cidade</label>
            <select name="id_cidade" id="id_cidade">
                <?php
                include('../Includes/conexao.php');
                $sql = "SELECT * FROM cidade";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['id']."'>"
                         .$row['nome_cidade']."/".$row['estado']
                         ."</option>";
                }
                ?>
            </select>
        </div>

        <div>
            <label for="cep">CEP: </label>
            <input type="number" name="cep" id="cep"
                    value="<?php echo $row['cep']?>">
        </div>

        <div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
        </div>
        <div>
            <button type="submit">Alterar</button>
        </div>
    </fieldset>
    </form>
    <a href="ListarCidade.php">Voltar</a>
</body>
</html>