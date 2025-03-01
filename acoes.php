<?php
function obterAlunos() {
    if (!file_exists('dados_alunos.txt')) {
        return [];
    }
    $dados = file_get_contents('dados_alunos.txt');
    return json_decode($dados, true);
}

function salvarAluno($nome, $nota) {
    $alunos = obterAlunos();
    $alunos[] = ['nome' => $nome, 'nota' => $nota];
    file_put_contents('dados_alunos.txt', json_encode($alunos));
}

function calcularMedia($alunos) {
    if (empty($alunos)) {
        return 0;
    }
    $soma = array_sum(array_column($alunos, 'nota'));
    return $soma / count($alunos);
}

function limparDados() {
    file_put_contents('dados_alunos.txt', '');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $acao = $_POST['acao'];
    if ($acao === 'salvar') {
        $nome = $_POST['nome'];
        $nota = (float)$_POST['nota'];
        if ($nota >= 0 && $nota <= 10) {
            salvarAluno($nome, $nota);
        }
    } elseif ($acao === 'limpar') {
        limparDados();
    }
    header('Location: lista.php');
    exit();
}
?>