<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo de desconto</title>
</head>

<body>
    <main id="tela-principal">
        <div class="centralizar">

            <h1>CALCULADORA DE IMPOSTO DE RENDA</h1>
            <img src="image.png" alt="Tabela imposto de renda 2025" style="width: 600px; height: 310px;">
            <form action="index.php" method="POST">
                <label for="salario">Digite seu salário bruto:</label> <br />
                <input id="salario" name="salario" type="number" step="0.1" required /> <br />
                <button type="submit">Calcular</button>
            </form>
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['salario']) && $_POST['salario'] !== '') {
                $salario_bruto = floatval($_POST['salario']);

                function calculoDesconto($salario_bruto, $porcentagem)
                {
                    $calcDesconto = $salario_bruto * $porcentagem;
                    $salarioFinal = $salario_bruto - $calcDesconto;
                    echo "<b>Salario bruto = $salario_bruto </b>";
                    echo "<b><br>Porcentagem de desconto = " . ($porcentagem * 100) . "% </b>";
                    echo "<b><br>Valor do desconto = $calcDesconto </b>";
                    echo "<b><br>Salario liquido a receber = $salarioFinal </b>";
                }

                function porcentagemDesconto($salario)
                {
                    if ($salario >= 2428.81 && $salario <= 2826.65) {
                        $porcentagem = 0.075;
                    } else if ($salario >= 2826.66 && $salario <= 3751.05) {
                        $porcentagem = 0.15;
                    } else if ($salario >= 3751.06 && $salario <= 4664.68) {
                        $porcentagem = 0.225;
                    } else if ($salario > 4664.68) {
                        $porcentagem = 0.275;
                    } else {
                        $porcentagem = 0;
                    }

                    calculoDesconto($salario, $porcentagem);
                }

                porcentagemDesconto($salario_bruto);
            } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<h2>Por favor, preencha o valor do salário corretamente.</h2>";
            }
            ?>

        </div>
    </main>
</body>

</html>