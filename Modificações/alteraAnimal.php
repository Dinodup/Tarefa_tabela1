<?php
    include('../Includes/conexao.php');
    $id_animal = $_GET['id_animal'];
    $sql = "SELECT * FROM animal WHERE id_animal=$id_animal";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Animal</title>
    <link rel="stylesheet" href="../Styles/style1.css">
</head>
<body>
    <form action="../Modificações/alteraAnimalExe.php" method="post">
        <fieldset>
            <legend>Alteração de Dados do Animal</legend>
            <div>
                <label for="nome_animal">Nome do animal: </label>
                <input type="text" name="nome_animal" id="nome_animal" value="<?php echo $row['nome_animal']; ?>">
            </div><p></p>
    
            <div>
                <label for="especie">Espécie: </label>
                <input type="text" name="especie" id="especie" value="<?php echo $row['especie']; ?>">
            </div><p></p>

            <div>
                <label for="raca">Raça: </label>
                <input type="text" name="raca" id="raca" value="<?php echo $row['raca']; ?>">
            </div><p></p>
    
            <div>
                <label for="data_nascimento">Data do Nascimento: </label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $row['data_nascimento']; ?>">
            </div><p></p>

            <div>
                <label for="castrado">Castrado:</label>
                <input type="checkbox" name="castrado" id="castrado" value="1" <?php echo $row['castrado'] ? 'checked' : ''; ?>>
            </div><p></p>
    
            <div>
                <input type="hidden" name="id_animal" value="<?php echo $row['id_animal']; ?>">
            </div>
            <div>
                <button type="submit">Alterar</button>
            </div>
        </fieldset>
    </form>
    <a href="../Animal/ListarAnimal.php">Voltar</a>
</body>
</html>
