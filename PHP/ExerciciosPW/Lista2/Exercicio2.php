<!DOCTYPE html>
<html>
<head>
    <title>Exercicios em PHP</title>
</head>
<body>
    <form method="post">
        <h2>1. Determinar o maior número (parar com 0)</h2>
        <input type="number" name="num" placeholder="Digite um número" required>
        <button type="submit" name="calc_maior">Adicionar</button>
    </form>
    <?php
    session_start();
    if (!$_SESSION) $_SESSION['maior'] = 0;
    if ($_POST) {
        $num = (int) $_POST['num'];
        if ($num == 0) {
            echo "<p>Maior número inserido: {$_SESSION['maior']}</p>";
            $_SESSION['maior'] = 0;
        } else {
            $_SESSION['maior'] = max($_SESSION['maior'], $num);
        }
    }
    ?>

    <form method="post">
        <h2>2. Contagem até 100 com múltiplos de 10</h2>
        <button type="submit" name="contar">Contar</button>
    </form>
    <?php
    if ($_POST && isset($_POST['contar'])) {
        for ($i = 1; $i <= 100; $i++) {
            echo "$i" . ($i % 10 == 0 ? " - <strong>Múltiplo de 10</strong>" : "") . "<br>";
        }
    }
    ?>
</body>
</html>
