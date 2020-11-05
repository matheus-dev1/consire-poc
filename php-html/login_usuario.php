<?php

session_start();
#Com esta funcao nos estamo iniciando uma secao ou seja, vou inicicar algumas variaveis superglobais, onde eu 
#posso usar em outros arquivos.

#echo "<pre>";
#A tag pre e como se fosse o modulo pprint no python, ou seja, deixa uma melhor visualizacao do array.
#print_r($_POST);
#echo "</pre>";

$email = $_POST['email'];
$senha = md5($_POST['senha']);

if (strlen($email) >= 3 and strlen($senha) >= 3){
    $conection = mysqli_connect("localhost", "Teste", "", "squad5");
    if ($conection == true){
        $SQLSelect = "SELECT EMAIL, SENHA, NOME FROM LOGIN WHERE EMAIL = '$email' and SENHA = '$senha'";
        $SQLSelectResult = mysqli_query($conection, $SQLSelect);
        
        $contador = 0;

        while ($rowResult = mysqli_fetch_all($SQLSelectResult)) {
            #print_r($rowResult);
            #A funcao mysqli_fetch_all() vai me retornar linha a linha da minha tabela.
            
            if ($rowResult[$contador][0] == $email and $rowResult[$contador][1] == $senha){

                $_SESSION['email'] = $rowResult[$contador][0];
                $_SESSION['senha'] = $rowResult[$contador][1];
                $_SESSION['nome'] = $rowResult[$contador][2];
                #Nesta linha de cima nos estamos atribuindo o valor obtido na consulta em uma variavel
                #superglobal.

                #echo "<pre>";
                #print_r($rowResult);
                #echo "</pre>";

                echo "<script> 
                        alert('Login Realizado com sucesso!');
                        window.location.href = 'home.php'
                    </script>";
            }
            $contador += + 1;
        }
        /*echo "<script> 
                alert('Email ou senha incorretos!');
                window.location.href = 'login.php'
            </script>";*/
    }
    else {
        die("Erro ao conectar-se ao banco de dados" . mysqli_connect_error());
    }
}

else {
    echo "<script> 
            alert('E-mail ou senha invalidos!');
            window.location.href = 'index.php'
        </script>";
}
?>