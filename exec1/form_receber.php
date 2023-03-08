<?php

    $senha_cripto = '$2y$12$xSCMZzffX9RLgMNSgYcKx.wSMF349FKSACHOgHDRFK.hcQ3EloD7K';
    $usuario = $_GET['name'] ?? false;
    $senha = $_GET['password'] ?? false;
    
    if ($usuario == 'Luiz' &&
        password_verify($senha, $senha_cripto)) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('location:boasvindas.php');
            die;
        }else{
            header('location:form.php?erro=1');
            die;
    }