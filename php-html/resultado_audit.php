<?php
    session_start();

    $servername = "localhost";
    $username = "Teste"; 
    $password = ""; 
    $database = "squad5";
    $conection = mysqli_connect($servername, $username, $password, $database);

    $nome_global = $_SESSION['nome'];
    $email_global = $_SESSION['email'];
    $senha_global = $_SESSION['senha'];

    $SQLSelect = "SELECT * FROM LOGIN WHERE(NOME = '$nome_global' AND EMAIL = '$email_global' AND SENHA = '$senha_global')";

    $SQLQuerySelectResult = mysqli_query($conection, $SQLSelect);
?>

<!--A pontuação que o sujeito atinge ao responder aos itens do AUDIT permite a
classificação do uso da substância da seguinte forma: Baixo risco – 0 a 7 pontos; Uso de risco –
8 a 15 pontos; Uso nocivo – 16 a 19 pontos; Provável dependência – 20 a 40 pontos. A partir da
identificação da zona de risco, torna-se possível ao profissional oferecer orientações
personalizadas, focadas no padrão de consumo individual.-->

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta lang="pt-br">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>BebendoBem | Resultado AUDIT</title>
    </head>

    <body> 
        <h2> Resultado AUDIT </h2>
        <?php 
            $contador = 0;

            while ($rowResult = mysqli_fetch_all($SQLQuerySelectResult)) {
                if ($rowResult[$contador][2] ==  $email_global and $rowResult[$contador][3] == $senha_global){
                    if ($rowResult[$contador][4] >= 0 and $rowResult[$contador][4] <= 7){
                        echo "ZONA I: Pessoas que se localizam na ZONA I geralmente fazem uso de baixo risco de álcool ou são abstêmias. De uma forma geral, são
                            pessoas que bebem menos de duas doses-padrão por dia ou que não ultrapassam a quantidade de cinco doses-padrão em uma única
                            ocasião. A intervenção adequada nesse nível é a educação em saúde, para que haja a manutenção do padrão de uso atual.";
                    }
                    else if ($rowResult[$contador][4] >= 8 and $rowResult[$contador][4] <= 15){
                        echo "ZONA II: Pessoas que pontuam nessa zona são consideradas usuários de risco; são pessoas que fazem uso acima de duas doses-padrão
                            todos os dias ou mais de cinco doses-padrão numa única ocasião, porém não apresentam nenhum problema decorrente disso. A
                            intervenção adequada nesse nível é a Orientação Básica sobre o uso de baixo risco e sobre os possíveis riscos orgânicos, psicológicos ou
                            sociais que o usuário pode apresentar se mantiver esse padrão de uso.";
                    }
                    else if ($rowResult[$contador][4]  >= 16 and $rowResult[$contador][4] <= 19){
                        echo "ZONA III: Nessa zona de risco estão os usuários com padrão de uso nocivo; ou seja, pessoas que consomem álcool em quantidade e
                            frequência acima dos padrões de baixo risco e já apresentam problemas decorrentes do uso de álcool. Por outro lado, essas pessoas não
                            apresentam a quantidade de sintomas necessários para o diagnóstico de dependência. A intervenção adequada nesse nível é a utilização.";
                    }
                    else if ($rowResult[$contador][4]  >= 20 and $rowResult[$contador][4] <= 40){
                        echo "ZONA IV: Pessoas que se encontram nesse nível apresentam grande chance de ter um diagnóstico de dependência. Nesse caso, é preciso
                            fazer uma avaliação mais cuidadosa e, se confirmado o diagnóstico, deve-se motivar o usuário a procurar atendimento especializado para
                            acompanhamento e encaminhá-lo ao serviço adequado.";
                    }
                    }
                }
        ?>
    </body>
</html>