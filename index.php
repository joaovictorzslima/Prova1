<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>

<h1>1 - PROVA-PHP</h1>

<h2>Preencha os dados abaixo</h2>

<form action="consumo.php" method="post">

    <br>
    <h2>Nome do seu equipamento</h2>
    <p>
        <input type="text" name="aparelho" placeholder="Equipamento">
    </p>

    <h2>Consumo maximo de WATTS</h2>
    <p>
        <input type="number" name="watts" placeholder="Quantidade de WATTS" step="0.1" min="0.1">
    </p>

    <h2>Quantidade de horas que o aparelho é ligado por dia</h2>
    <p>
        <input type="number" name="horas" placeholder="Quantidade de horas">
    </p>

    <h2>Número de dias que o aparelho ficará ligado no mês</h2>
    <p>
        <input type="number" name="dias" placeholder="Quantidade Mensal">
    </p>

    <h2>Valor do Kilowatt da sua região</h2>
    <p>
        <input type="number" name="valor" placeholder="Kilowatt-hora" step="0.1" min="0.1">
    </p>

    <p>
       <button type="submit">Cadastrar</button>
    </p>

</form>