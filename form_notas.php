<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de média e situação de aluno</title>
</head>
<body>
    <h1>Cálculo de média e situação de aluno</h1>

    <form action="form_notas.php" method="get">
        <label for="nota1">Nota 1:</label>
        <input type="text" name="nota1" id="nota1"><br>
        <label for="nota2">Nota 2:</label>
        <input type="text" name="nota2" id="nota2"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php

        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $media = ($nota1 + $nota2) /2;
        $situacao = "";
        
        if ($media >= 6) {
            $situacao = "APROVADO";
        } else if ($media >= 4 && $media < 6) {
            $situacao = "Exame Final";
        } else {
            $situacao = "REPROVADO";
        }

        echo "<h4>Média: $media</h4>";
        echo "<h4>Situação: $situacao </h4>";

    ?>

    <a href="index.html">voltar</a>
</body>
</html>