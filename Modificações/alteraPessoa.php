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
    <link rel="stylesheet" href="../Styles/style2.css">
</head>
<body>
    <main>
            <aside class="form-flex">
            <div class="form-container">
                <form class="form" action="alteraPessoaExe.php" method="post">
                    <div">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="surname">
                    </div>
                    <div>
                        <label for="email">Email da Pessoa</label>
                        <input type="text" name="email" id="surname">
                    </div>
                    <div>
                        <label for="endereco">Endereço da Pessoa</label>
                        <input type="text" name="endereco" id="surname">
                    </div>
                    <div>
                        <label for="bairro">Bairro da Pessoa</label>
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
                        <input type="number" name="cep" id="cep">
                    </div>
                    <input class="sign" type="submit" value="Cadastrar">
                </form>
            </div>
        </aside>
    </main>
</body>
</html>