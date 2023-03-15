<?php 
    require('verifica_autenticacao.php');

    echo 'Boas Vindas';

?>

<p>
    <?php
        if($_SESSION['admin']) {
    ?>
    <a href="usuarios.php">Usuários</a>
    <?php
        }
    ?>
    <a href="logout.php">Sair</a>
</p>