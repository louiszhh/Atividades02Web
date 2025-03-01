<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Cadastrar Aluno</h1>
    <form action="acoes.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label for="nota">Nota (0-10):</label>
        <input type="number" name="nota" step="0.1" min="0" max="10" required>
        <br>
        <button type="submit" name="acao" value="salvar">Salvar</button>
    </form>
    <br>
    <a href="lista.php">Ver Lista de Alunos</a>
</body>
</html>