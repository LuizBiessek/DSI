<?php
    $usuario = $_GET['name'];
    $senha = $_GET['password'];
    
    if ($usuario == 'Luiz' &&
        $senha == 456) {
        echo 'Logi Ok';
        }else{
        echo 'Usuário ou senha incorretos';
    }