<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Animais</title>
    <link rel="stylesheet" href="../Styles/style1.css">
</head>
<body>
    <form action="CadastroAnimalExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Animais</legend>
            <div>
                <label for="nome_animal">Nome do animal: </label>
                <input type="text" name="nome_animal" id="nome_animal" required>
            </div><p></p>
    
            <div>
                <label for="especie">Espécie: </label>
                <input type="text" name="especie" id="especie" required>
            </div><p></p>

            <div>
                <label for="raca">Raça: </label>
                <input type="text" name="raca" id="raca" required>
            </div><p></p>
    
            <div>
                <label for="data_nascimento">Data do Nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
            </div><p></p>
    
            <h3>Situação</h3>
            <div id="castrado">
                <label for="castrado">Castrado</label>
                <input type="hidden" name="castrado" value="0">
                <input type="checkbox" name="castrado" id="castrado" value="1">
            </div><p></p>
    
            <div>
                <label for="id_pessoa">Dono: </label>
                <select name="id_pessoa" id="id_pessoa" required>
                    <?php
                    include('../Includes/conexao.php');
                    $sql = "SELECT * FROM pessoa";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id_pessoa']."'>"
                             .$row['nome']
                             ."</option>";
                    }
                    ?>
                </select>
            </div><p></p>

            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>
    </form>
    <a href="../index.html">Voltar para a Tela Inicial</a>
</body>
</html>
