<?php

$newDados = [
    031 => [
        'nome' => "Gustavo",
        'saldo' => 9999,
    ],
    866 => [
        'nome' => "Raquel",
        'saldo' => 9999,
    ],
    217 => [
        'nome' => "Ana",
        'saldo' => 9999,
    ],
    572 => [
        'nome' => "Val",
        'saldo' => 9999,
    ],
];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste PHP</title>
    </head>
<body>
        <?php foreach($newDados as $ind => $dados){ 
        ['nome' => $nome, 'saldo' => $saldo] = $dados?>
        <?php $nome = ($nome == "Gustavo") ? "Gustavo The King" : $nome; ?>
        <dl>
            <dt>
                <h3><?= $nome ?> - <?= $ind ?></h3>
            </dt>
            <dd>
                Saldo:  <?= $saldo ?>
            </dd>
        </dl>
        <?php } ?>
</body>
</html>