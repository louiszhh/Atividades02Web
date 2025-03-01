<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Lista de Alunos</h1>
    <?php
    include 'acoes.php';
    $alunos = obterAlunos();
    if (empty($alunos)) {
        echo "<p>Nenhum aluno cadastrado.</p>";
    } else {
        echo "<ul>";
        foreach ($alunos as $aluno) {
            echo "<li>{$aluno['nome']} - Nota: {$aluno['nota']}</li>";
        }
        echo "</ul>";
        echo "<p>Média das notas: " . calcularMedia($alunos) . "</p>";
    }
    ?>
    <br>
    <a href="registro.php">Cadastrar Novo Aluno</a>
    <br>
    <form action="acoes.php" method="POST">
        <button type="submit" name="acao" value="limpar">Limpar Todas as Notas</button>
    </form>
</body>
</html>