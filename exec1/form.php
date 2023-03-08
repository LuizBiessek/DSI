<?php
    $erro = $_GET['erro'] ?? false;

    switch($erro) {
        case 1:
            echo 'Usuário ou senha inválidos';
            break;
        case 2:
            echo 'Você não está autenticado';
            break;
        case 3:
            echo 'Você não está mais numa sessão';
            break;
    }
?>

<form action="form_receber.php">
    <div>
        <input type="text" name="name" placeholder="Nome">
    </div>
    <div>
        <input type="password" name="password" placeholder="Senha">
    </div>
    <div>
        <input type="submit" value="Ok">
    </div>
</form>