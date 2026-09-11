<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17 - Calcular Juros Compostos</title>
</head>
<body>
    <h1>Exercício 17 - Calcular Juros Compostos</h1>
    <form method="POST" action="resposta17.php">
        <label for="capital">Informe o capital: </label>
        <input type="number" id="capital" name="capital">
        <br>

        <label for="taxa">Informe a taxa de juros (em %): </label>
        <input type="number" id="taxa" name="taxa">
        <br>

        <label for="tempo">Informe o tempo (em meses): </label>
        <input type="number" id="tempo" name="tempo">
        <br>

        <button type="submit" class="btn btn-primary">Calcular Juros Compostos</button>
    </form>
</body>
</html>