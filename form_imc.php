<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do IMC</title>
</head>
<body>
    <h1>Cálculo do IMC</h1>

    <form action="form_imc.php" method="get">
        <label for="peso">Peso:</label>
        <input type="text" name="peso" id="peso" placeholder="Ex: 60,2"> Kg <br>
        <label for="altura">Altura:</label>
        <input type="text" name="altura" id="altura" placeholder="Ex: 1,70"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php

    $peso_f = $_GET["peso"];
    $peso = str_replace(",", ".", $peso_f);
    $altura_f = $_GET["altura"];
    $altura = str_replace(",", ".", $altura_f);
    $imc = $peso / ($altura * $altura);
    $situacao = "";

    if ($imc <= 17) {
        $situacao = "Muito abaixo do peso";
    } else if ($imc >= 17 && $imc <= 18.49) {
        $situacao = "Abaixo do peso";
    } else if ($imc >= 18.5 && $imc <= 24.99) {
        $situacao = "Peso normal";
    } else if ($imc >= 25 && $imc <= 29.99) {
        $situacao = "Acima do peso";
    } else if ($imc >= 30 && $imc <= 34.99) {
        $situacao = "Obesidade I";
    } else if ($imc >= 35 && $imc <= 39.99) {
        $situacao = "Obesidade II (severa)";
    } else {
        $situacao = "Obesidade III (mórbida)";
    }

    echo "<h4>IMC: $imc</h4>";
    echo "<h4>Situação: $situacao</h4>";
    
    ?>

    <a href="index.html">voltar</a>


</body>
</html>