<?php
$link = mysqli_connect("localhost", "Teste", "", "squad5");

if (!$link)
    die ("Falha na conexão com o BD " . mysqli_connect_errno());
else
    echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL.";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sqlQuerySelect = "insert into LOGIN(nome, email, senha) values ('$nome', '$email', '$senha')";
$sqlQuerySelectResult = $link -> query($sqlQuerySelect);
#funcao header()

mysqli_close($link);

?>
