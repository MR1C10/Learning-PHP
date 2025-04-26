<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Notas e Reservas</title>
</head>
<body>
    <h2>1. Cálculo de Médias</h2>
    <form method="post">
        <?php for ($i = 1; $i <= 6; $i++): ?>
            <label>Aluno <?= $i ?> - Nota 1:</label>
            <input type="number" name="nota1[]" step="0.1" required>
            <label>Nota 2:</label>
            <input type="number" name="nota2[]" step="0.1" required>
            <br>
        <?php endfor; ?>
        <button type="submit" name="calcular">Calcular Médias</button>
    </form>
    <?php
    if (isset($_POST['calcular'])) {
        $notas1 = $_POST['nota1'];
        $notas2 = $_POST['nota2'];
        $aprovados = $exame = $reprovados = 0;
        $somaMedias = 0;
        
        echo "<h3>Resultados:</h3>";
        for ($i = 0; $i < 6; $i++) {
            $media = ($notas1[$i] + $notas2[$i]) / 2;
            $somaMedias += $media;
            
            if ($media < 3) {
                $mensagem = "Reprovado";
                $reprovados++;
            } elseif ($media <= 7) {
                $mensagem = "Exame";
                $exame++;
            } else {
                $mensagem = "Aprovado";
                $aprovados++;
            }
            echo "Aluno ".($i+1).": Média = $media, Status: $mensagem <br>";
        }
        echo "<p>Total de Aprovados: $aprovados</p>";
        echo "<p>Total de Exame: $exame</p>";
        echo "<p>Total de Reprovados: $reprovados</p>";
        echo "<p>Média da Classe: ".($somaMedias / 6)." </p>";
    }
    ?>
    
    <h2>2. Sistema de Reservas</h2>
    <form method="post">
        <label>Número da Mesa (1-40):</label>
        <input type="number" name="mesa" min="0" max="40" required>
        <label>Quantidade de Lugares:</label>
        <input type="number" name="lugares" min="1" max="6" required>
        <button type="submit" name="reservar">Reservar</button>
    </form>
    <?php
    session_start();
    if (!isset($_SESSION['lugares_disponiveis'])) {
        $_SESSION['lugares_disponiveis'] = array_fill(1, 40, 6);
    }
    
    if (isset($_POST['reservar'])) {
        $mesa = (int)$_POST['mesa'];
        $lugares = (int)$_POST['lugares'];
        
        if ($mesa == 0 || array_sum($_SESSION['lugares_disponiveis']) == 0) {
            echo "<p>Reservas encerradas.</p>";
            session_destroy();
        } elseif ($mesa >= 1 && $mesa <= 40) {
            if ($_SESSION['lugares_disponiveis'][$mesa] >= $lugares) {
                $_SESSION['lugares_disponiveis'][$mesa] -= $lugares;
                echo "<p>Reserva feita! Mesa $mesa - Lugares restantes: ".$_SESSION['lugares_disponiveis'][$mesa]."</p>";
            } else {
                echo "<p>Não há lugares suficientes na mesa $mesa.</p>";
            }
        } else {
            echo "<p>Mesa inválida.</p>";
        }
    }
    ?>
</body>
</html>