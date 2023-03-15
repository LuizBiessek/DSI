<?php 
    require('verifica_autenticacao.php');
    require('pdo.inc.php');

    $usuario = $_POST['userName'] ?? null;
    $senha = $_POST['password'] ?? null;
    $admin = isSet($_POST['admin']);

    //Prepare
    $sql = $pdo->prepare("INSERT INTO usuarios VALUES ('',?,?,1,?)");

    //Replace the placeholder
    $sql->bindParam(1, $usuario, PDO::PARAM_STR);
    $sql->bindParam(2, $senha);
    $sql->bindParam(3, $admin);

    //Executa o SQL
    $sql->execute();

    echo('DEU CERTO');