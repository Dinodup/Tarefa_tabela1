<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Animal</title>
    <link rel="stylesheet" href="../Styles/style3.css">
</head>
<body>
    <h1>Deletar Animal</h1>
    <?php
        include('../Includes/conexao.php');
        $id_animal = $_GET['id_animal'];
        $sql = "DELETE
                FROM animal
                WHERE id_animal = $id_animal";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h2>Dados deletados com sucesso!</h2>";
        }else{
            echo "<h2>Erro ao deletar os dados</h2>";
            echo "<h2>".mysqli_error($con)."</h2>";
        }
    ?>
    <a href="../Animal/ListarAnimal.php">Voltar</a>
</body>
</html>
