<?php
    require('pdo.inc.php');

    $usuario = $_GET['name'] ?? false;
    $senha = $_GET['password'] ?? false;

    //Prepare
    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE userName = ? AND active = 1');

    //Replace the placeholder
    $sql->bindParam(1, $usuario, PDO::PARAM_STR);

    //Executa o SQL
    $sql->execute();

    //Busca os dados no banco
    $dados = $sql->fetch(PDO::FETCH_ASSOC);

    if ( $sql->rowCount() == 1 &&
        password_verify($senha, $dados['password'])) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['admin'] = $dados['admin'];
            header('location:boasvindas.php');
            die;
        }else{
            header('location:form.php?erro=1');
            die;
    }