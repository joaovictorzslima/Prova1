<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova - Consumo do equipamento</title>
</head>
<body>
    <h1>Consumo Mensal</h1>

    <?php

        if ($_SERVER ['REQUEST_METHOD'] == 'POST'){

            $aparelho = $_POST['aparelho'];
            $watts = $_POST['watts'];
            $horas = $_POST['horas'];
            $dias = $_POST['dias'];
            $valor = $_POST['valor'];
            $consumoMedio = 0.0;

            
            $soma = $watts / 1000;

            $consumoDiario = $soma * $horas;
        
            $consumoMensal = $consumoDiario * $dias;

            $valorGastoMensal = $consumoMensal * $valor;

            $consumoAparelho = $consumoMensal * $soma;

            if ($valorGastoMensal <= 5) {
                $categoria = "Baixa";
            } elseif ($valorGastoMensal > 5 && $valorGastoMensal <= 10) {
                $categoria = "Moderada";
            } else {
                $categoria = "Elevada";
            }

            echo "<strong>Aparelho</strong>: $aparelho <br>";
            echo "<strong>Consumo Maximo</strong>: $watts <br>";
            echo "<strong>Quantidade de horas por dia</strong>: $horas <br>";
            echo "<strong>Numero de dias com aparelho ligado</strong>: $dias <br>";
            echo "<strong>Valor Kilowatt da sua Região</strong>: $valor <br>";
            echo "<strong>Consumo do Aparelho: R$</strong>" . formatar($consumoAparelho) . "<br>";
            echo "<strong>Consumo diário: </strong>" . formatar($consumoDiario, 2) . " KWH<br>";
            echo "<strong>Consumo mensal: R$ </strong>" . formatar($valorGastoMensal,);
            echo "<br><strong>Categoría de Consumo: </strong> $categoria";
        }

        function formatar($valor) {
            return number_format($valor, 2, ',', '.');
        }

    ?>

    <p>
        <a href="index.php">Voltar a HOME</a>
    </p>

</body>
</html>