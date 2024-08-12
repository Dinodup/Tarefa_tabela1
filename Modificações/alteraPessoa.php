<?php
    include('../Includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM pessoa WHERE id = $id";
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
    <main>
        <aside class="form-flex">
            <form class="form" action="alteraPessoaExe.php" method="post">
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco">
                </div>
                <div>
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro">
                </div>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <label for="id_cidade">Cidade:<br></label>
                <div class="input-group">
                    <select name="id_cidade" id="id_cidade">
                        <?php
                            include('../Includes/conexao.php');
                            $sql = "SELECT * FROM cidade";
                            $result = mysqli_query($con,$sql);
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "<option value='".$row['id']."'>".$row['nome_cidade']."/".$row['estado']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep">
                </div>
                <input class="sign" type="submit" value="Cadastrar">
            </form>
            <a href="../Pessoa/ListarPessoa.php">Voltar</a>
        </aside>
    </main>
</body>
</html>