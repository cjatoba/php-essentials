<?php

session_start();

if (isset($_POST['hiddenKey']) && $_POST['hiddenKey'] === $_SESSION['hiddenKey']) {

    $nome = (isset($_POST['nome'])) ? trim($_POST['nome']) : null;
    $sobrenome = (isset($_POST['sobrenome'])) ? trim($_POST['sobrenome']) : null;
    $cpf = (isset($_POST['cpf'])) ? trim($_POST['cpf']) : null;

    if (!empty($nome) && !empty($sobrenome) && !empty($cpf)) {
        echo "Validação ok!";
    } else {
        echo 'Por favor, preencha todos os dados.';
        exit;
    }
} else {
    echo 'Ops, algo deu errado. Tente novamente.';
    exit;
}
