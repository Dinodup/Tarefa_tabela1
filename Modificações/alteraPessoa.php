<?php
    include('../Includes/conexao.php');
    $id_pessoa = $_GET['id'];
    $sql = "SELECT * FROM pessoa WHERE id_pessoa = $id_pessoa";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Pessoa</title>
    <link rel="stylesheet" href="../Styles/style1.css">
</head>
<body>
    <main>
        <aside class="form-flex">
            <form class="form" action="alteraPessoaExe.php" method="post">
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>">
                </div>
                <div>
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']; ?>">
                </div>
                <div>
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" value="<?php echo $row['bairro']; ?>">
                </div>
                <input type="hidden" name="id_pessoa" value="<?php echo $row['id_pessoa']; ?>">
                <label for="id_cidade">Cidade:<br></label>
                <div class="input-group">
                    <select name="id_cidade" id="id_cidade">
                        <?php
                            $sql_cidades = "SELECT * FROM cidade";
                            $result_cidades = mysqli_query($con, $sql_cidades);
                            while ($row_cidade = mysqli_fetch_array($result_cidades)) {
                                $selected = $row['id_cidade'] == $row_cidade['id'] ? 'selected' : '';
                                echo "<option value='".$row_cidade['id']."' $selected>".$row_cidade['nome_cidade']."/".$row_cidade['estado']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" id="cep" value="<?php echo $row['cep']; ?>">
                </div>
                <button type="submit" value="Alterar">Alterar</button>
            </form>
            <a href="../Pessoa/ListarPessoa.php">Voltar</a>
        </aside>
    </main>
</body>
</html>
