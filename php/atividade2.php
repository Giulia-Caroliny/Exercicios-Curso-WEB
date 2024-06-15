<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2 - frete</title>
</head>
<body>
    <?php
        $valor = 50;
        $possui_cartao = true;
        $frete = 50;
        $recebeu_desconto_frete = false;

        if($valor >= 100 && $possui_cartao){
            $frete = 0;
            $recebeu_desconto_frete = true;
        }
    ?>

    <h1>Detalhes do pedido</h1>
    <p>
        Possui cartão da loja? <?= $possui_cartao ? 'SIM' : 'NÃO'; ?>
    </p>
    <p>
        Valor do pedido: <?= $valor; ?>
    </p>
    <p>
        Recebeu desconto no frete? <?= $recebeu_desconto_frete ? 'SIM' : 'NÃO'; ?>
    </p>
    <p>
        Valor do frete: <?= $frete; ?>
    </p>
    <p>
        Valor total: <?= $valor + $frete; ?>
    </p>
</body>
</html>