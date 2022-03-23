<?php

    session_start();

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = [1 => 'Administrativo', 2 => 'Usuário'];

    $usuarios_app = [
        ['id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
        ['id' => 3, 'email' => 'jubileu@teste.com.br', 'senha' => '1234', 'perfil_id' => 2],
        ['id' => 4, 'email' => 'fulana@teste.com.br', 'senha' => '1234', 'perfil_id' => 2],
    ];
    

    /*
    print_r($_GET);
    echo '<br>';
    echo $_GET['email'];
    echo '<br>';
    echo $_GET['senha'];

    print_r($_POST);
    echo '<br>';
    echo $_POST['email'];
    echo '<br>';
    echo $_POST['senha'];
    */
    foreach ($usuarios_app as $user) {
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticado) {
        echo 'Usuário Autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    } else {
        header('Location: index.php?login=erro');
        $_SESSION['autenticado'] = 'NÃO';
    }
?>