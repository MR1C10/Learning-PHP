<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista 4</title>
</head>
<body>
    <main>
        <div>
            <h3>
                1- Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo<br>
                feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA.<br>
                Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.
            </h3>
            <form method="POST">
                
                <input type="text" name="nome" placeholder="Digite o nome" required>
                <select name="sexo">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
                <input type="number" name="idade" placeholder="Digite a idade" required>
                <button type="submit" name="check_aceitacao">Verificar</button>
            
            </form>

            <?php // Exercicio 1
                if (isset($_POST['check_aceitacao'])) {
                    $nome = $_POST['nome'];
                    $sexo = $_POST['sexo'];
                    $idade = (int) $_POST['idade'];
                    echo "<p>$nome: " . (($sexo == 'F' && $idade < 25) ? "ACEITA" : "NÃO ACEITA") . "</p>";
                }
            ?>
        </div>

        <div>
            <form method="POST">

                

            </form>
            

        </div>
    </main>

</body>
</html>

<?php // Exercicio 2





?>

<?php // Exercicio 3





?>

<?php // Exercicio 4





?>