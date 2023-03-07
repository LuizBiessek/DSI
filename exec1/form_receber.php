<?php
    $usuario = $_GET['name'] ?? false;
    $senha = $_GET['password'] ?? false;
    
    if ($usuario == 'Luiz' &&
        $senha == 456) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('location:boasvindas.php');
            die;
        }else{
            header('location:form.php?erro=1');
            die;
    }