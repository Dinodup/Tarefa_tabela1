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
    <form action="CadastroAnimalExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Animais</legend>
            <div>
                <label for="nome_animal">Nome do animal: </label>
                <input type="text" name="nome_animal" id="nome_animal">
            </div><p></p>
    
            <div>
                <label for="especie">Espécie: </label>
                <input type="text" name="especie" id="especie">
            </div><p></p>

            <div>
                <label for="raca">Raça: </label>
                <input type="text" name="raca" id="raca">
            </div><p></p>
    
            <div>
                <label for="data_nascimento">Data do Nasciment: </label>
                <input type="date" name="data_nascimento" id="data_nascimento">
            </div><p></p>

            <div>
                <label for="idade">Idade: </label>
                <input type="number" name="idade" id="idade">
            </div><p></p>
    
            <h3>Situação</h3>
        <div id="castrado">
            <label for="operacao">Castrado</label>
            <input type="hidden" name="castrado" id="castrado" value="0">
            <input type="checkbox" name="castrado" id="castrado" value="1">
        </div><p></p>
    
        <div>
            <label for="id_pessoa">ID pessoa: </label>
            <select name="id_pessoa" id="id_pessoa">
                <?php
                include('../Includes/conexao.php');
                $sql = "SELECT * FROM pessoa";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['id']."'>"
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