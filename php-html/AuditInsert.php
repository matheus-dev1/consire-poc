<?php

session_start();

$questao1 = $_POST['select'];
$questao2 = $_POST['select2'];
$questao3 = $_POST['select3'];
$questao4 = $_POST['select4'];
$questao5 = $_POST['select5'];
$questao6 = $_POST['select6'];
$questao7 = $_POST['select7'];
$questao8 = $_POST['select8'];
$questao9 = $_POST['select9'];
$questao10 = $_POST['select10'];

$resultado = $questao1 + $questao2 + $questao3 + $questao4 + $questao5 + $questao6 + $questao7 + $questao8 + $questao9 + $questao10;

$servername = "localhost";
$username = "Teste"; 
$password = ""; 
$database = "squad5";

$nome_global = $_SESSION['nome'];
$email_global = $_SESSION['email'];
$senha_global = $_SESSION['senha'];

$conection = mysqli_connect($servername, $username, $password, $database);

$SQLUpdate = "UPDATE LOGIN SET audit = '$resultado' WHERE (NOME = '$nome_global' and EMAIL = '$email_global' and SENHA = '$senha_global')";

$SQLQueryUpdateResult = mysqli_query($conection, $SQLUpdate);

echo "<script> 
        alert('Teste Feito com sucesso!');
        window.location.href = 'resultado_audit.php'
    </script>";
?>

<!--A pontuação que o sujeito atinge ao responder aos itens do AUDIT permite a
classificação do uso da substância da seguinte forma: Baixo risco – 0 a 7 pontos; Uso de risco –
8 a 15 pontos; Uso nocivo – 16 a 19 pontos; Provável dependência – 20 a 40 pontos. A partir da
identificação da zona de risco, torna-se possível ao profissional oferecer orientações
personalizadas, focadas no padrão de consumo individual.-->
