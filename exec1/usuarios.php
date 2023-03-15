<?php 
    require('verifica_autenticacao.php');
    require('pdo.inc.php');

    $sql = $pdo->query('SELECT * FROM usuarios WHERE active = 1');

    while ($dados = $sql->fetch(PDO::FETCH_ASSOC)){

        echo "<p>{$dados['userName']}</p>";

    };
?>

<form action="usuario_adicionar.php" method="post">
    <p><input type="text" name="userName" placeholder="Nome"></p>
    <p><input type="password" name="password" placeholder="Senha"></p>
    <p><label>
        <input type="checkbox" name="adim">Admin
    </label></p>
    <p><input type="submit" value="Gravar"></p>
</form>

