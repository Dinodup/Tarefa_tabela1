<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <link rel="stylesheet" href="../Styles/style1">
</head>
<body>
    <form action="CadastroPessoaExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Pessoas</legend>
            <div>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome">
            </div><p></p>
    
            <div>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </div><p></p>

            <div>
                <label for="endereco">Endereço: </label>
                <input type="text" name="endereco" id="endereco">
            </div><p></p>
    
            <div>
                <label for="bairro">Bairro: </label>
                <input type="text" name="bairro" id="bairro">
            </div><p></p>

            <div>
                <label for="id">Id da Cidade: </label>
                <select name="id" id="id">
                <?php
                include('../Includes/conexao.php');
                $sql = "SELECT * FROM cidade";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<br><option value='".$row['id']."'>"
                         .$row['nome_cidade']."/".$row['estado']
                         ."</option>";
                }
                ?>
                </select>
            </div><p></p>
    
            <div>
                <label for="cep">CEP: </label>
                <input type="text" name="cep" id="cep">
            </div><p></p>
    
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>
    </form>
    <a href="../index.html">Voltar para a Tela Inicial</a>
</body>
</html>