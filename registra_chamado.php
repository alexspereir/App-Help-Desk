<?php

    session_start();

    $_POST['titulo'] = str_replace('#', '-', $_POST['titulo']);
    $_POST['categoria'] = str_replace('#', '-', $_POST['categoria']);
    $_POST['descricao'] = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . implode('#', $_POST) . PHP_EOL;

    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
    
    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>