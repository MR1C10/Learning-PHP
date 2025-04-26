<!DOCTYPE html>
<html>
<head>
    <title>Exercicios em PHP</title>
</head>
<body>
    <form method="post">
        <h2>1. Soma com ajuste</h2>
        <input type="number" name="num1" placeholder="Digite o primeiro número" required>
        <input type="number" name="num2" placeholder="Digite o segundo número" required>
        <button type="submit" name="calc_soma">Calcular</button>
    </form>
    <?php
    if (isset($_POST['calc_soma'])) {
        $num1 = (int) $_POST['num1'];
        $num2 = (int) $_POST['num2'];
        $soma = $num1 + $num2;
        if ($soma > 20) {
            $soma += 8;
        } else {
            $soma -= 5;
        }
        echo "<p>Resultado: $soma</p>";
    }
    ?>

    <form method="post">
        <h2>2. Verificação de divisibilidade</h2>
        <input type="number" name="num" placeholder="Digite um número" required>
        <button type="submit" name="check_div">Verificar</button>
    </form>
    <?php
    if (isset($_POST['check_div'])) {
        $num = (int) $_POST['num'];
        $divisores = [];
        if ($num % 10 == 0) $divisores[] = '10';
        if ($num % 5 == 0) $divisores[] = '5';
        if ($num % 2 == 0) $divisores[] = '2';
        echo empty($divisores) ? "<p>Não é divisível por 10, 5 ou 2</p>" : "<p>Divisível por " . implode(", ", $divisores) . "</p>";
    }
    ?>

    <form method="post">
        <h2>3. Aceitação baseada em sexo e idade</h2>
        <input type="text" name="nome" placeholder="Digite o nome" required>
        <select name="sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
        <input type="number" name="idade" placeholder="Digite a idade" required>
        <button type="submit" name="check_aceitacao">Verificar</button>
    </form>
    <?php
    if (isset($_POST['check_aceitacao'])) {
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $idade = (int) $_POST['idade'];
        echo "<p>$nome: " . (($sexo == 'F' && $idade < 25) ? "ACEITA" : "NÃO ACEITA") . "</p>";
    }
    ?>

    <form method="post">
        <h2>4. Ordenação decrescente</h2>
        <input type="number" name="num1" placeholder="Primeiro número" required>
        <input type="number" name="num2" placeholder="Segundo número" required>
        <input type="number" name="num3" placeholder="Terceiro número" required>
        <button type="submit" name="sort_desc">Ordenar</button>
    </form>
    <?php
    if (isset($_POST['sort_desc'])) {
        $numeros = [(int)$_POST['num1'], (int)$_POST['num2'], (int)$_POST['num3']];
        rsort($numeros);
        echo "<p>Ordem decrescente: " . implode(", ", $numeros) . "</p>";
    }
    ?>
</body>
</html>
