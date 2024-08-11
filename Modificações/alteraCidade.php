<?php
    include('../Includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cidade WHERE id=$id";
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
        <legend>Cadastro de Cidades</legend>
        <div>
            <label for="nome_cidade">Nome: </label>
            <input type="text" name="nome_cidade" id="nome_cidade"
                    value="<?php echo $row['nome_cidade']?>">
        </div>

        <div>
            <label for="estado">Estado</label>
            <select name="estado" id="estado">
                <option value="SP"
                    <?php echo $row['estado'] == "SP" ? "selected" : "" ?>>SP
                </option>
                <option value="RJ"
                    <?php echo $row['estado'] == "RJ" ? "selected" : "" ?>>RJ
                </option>
                <option value="MG"
                    <?php echo $row['estado'] == "MG" ? "selected" : "" ?>>MG
                </option>
                <option value="CE"
                    <?php echo $row['estado'] == "CE" ? "selected" : "" ?>>CE
                </option>
            </select>
        </div>

        <div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
        </div>
        <div>
            <button type="submit">Alterar</button>
        </div>
    </fieldset>
    </form>
    <a href="../Cidade/ListarCidade.php">Voltar</a>
</body>
</html>