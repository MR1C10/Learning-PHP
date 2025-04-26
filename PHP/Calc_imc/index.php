<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo de imc</title>
</head>

<body>
    <div class="centralizar">
        <main id="tela-principal">
            <h1 class="titulo">Cálculo de IMC</h1>
            <img src="./image.png">
            <br/>

            <form method="POST">
                <label for="nome">Digite seu nome</label> <br/>
                <input type="text" id="nome" placeholder="Nome" name="nome">
                <br/>
                <label for="altura">Digite seu Altura</label> <br/>
                <input type="number" id="altura" placeholder="Altura" name="altura" step="any">
                <br/>
                <label for="peso">Digite seu Peso</label> <br/>
                <input type="number" id="peso" placeholder="Peso" name="peso" step="any">
                <br/>
                <button id="calcular">Calcular</button>
                <button id="limpar">Limpar</button>
            </form>

            <?php
                function Calc_imc($imc){

                    if ($imc < 18.05){
                        return ("Abaixo do peso");
                    }
                    else if ($imc > 18.5 && $imc < 24.9){
                        return ("Peso ideal(Parabéns!)");
                    }
                    else if ($imc > 25.0 && $imc < 29.9){
                        return ("Levemente acima do peso");
                    }
                    else if ($imc > 30.0 && $imc < 39.9){
                        return ("Obesidade grau I");
                    }
                    else if ($imc > 35.0 && $imc < 39.9){
                        return ("Obesidade grau II (severa)");
                    }
                    else{
                        return ("Obesidade grau III (mórbida)");
                    }
                } 

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $peso = floatval($_POST['peso']);
                    $altura = floatval($_POST['altura']);
                    $nome = htmlspecialchars($_POST['nome']);
                
                    if ($peso > 0 && $altura > 0) {
                        $IMC = $peso / ($altura ** 2);
                        $result = Calc_imc($IMC);
                        echo "<h2>$nome, você está com: $result</h2>";
                    } else {
                        echo "<h2>Preencha altura e peso corretamente.</h2>";
                    }
                }
                
            ?>
            
        </main>
        
    </div>
</body>
</html>