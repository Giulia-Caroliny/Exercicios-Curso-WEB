<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade 1</title>
</head>

<body>
    <?php
    $idade = 26;
    $peso = 70.5;
    $situacao = ($idade >= 16 && $idade <= 69) && ($peso >= 50) ? "Atende aos requisitos" : "Não atende aos requisitos";

    print ("Idade: $idade <br>");
    print ("Peso: $peso <br>");
    print ("Situação: $situacao <br>");
    ?>
</body>

</html>