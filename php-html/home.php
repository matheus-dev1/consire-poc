<?php

session_start();

?>

<!DOCTYPE html>

<html>
    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/global.css">
        <link rel="stylesheet" href="../css/home.css">
        <title>BebendoBem | Home</title>
    </head>
    <body>
    <header>
        <nav>
            <a href="index.php" ><img src="../img/logo.svg" width="100" height="70" alt="Icone"></a>
            <a class="ajuste_home" href="audit.php">Audit</a>
            <a href="resultado_audit.php">Resultado Audit</a>
            <a href="index.php">Sair</a>
            <!--session_destroy()-->
        </nav>
    </header>

        <h3>Ola, <?php echo $_SESSION['nome'] . ' seu e-mail: ' . $_SESSION['email']?></h3>
        <!-- Com a funcao session_destroy() eu encero esta sessao, podemos entender como se eu estivesse 
            deslogando do sistema e sendo redirecionado a pagina de login.-->
    </body>
</html>