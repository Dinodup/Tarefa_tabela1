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
    <form action="CadastroCidadeExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Cidades</legend>
        <div>
            <label for="nome_cidade">Nome da cidade: </label>
            <input type="text" name="nome_cidade" id="nome_cidade">
        </div>
<p></p>
        <div>
            <label for="estado">Estado</label>
            <select name="estado" id="estado">
                <option value="SP">SP</option>
                <option value="RJ">RJ</option>
                <option value="MG">MG</option>
                <option value="CE">CE</option>
            </select>
        </div>

        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </fieldset>
    </form>
    <a href="../index.html">Voltar para a Tela Inicial</a>
</body>
</html>