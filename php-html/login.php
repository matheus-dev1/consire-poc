<?php 
    $servername = "localhost";
    $username = "Teste"; 
    $password = ""; 
    $database = "squad5"; 
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    $nome = $_POST['nome']; 
    $email = $_POST['email'];
    $senha = $_POST['senha']; 
    #$senha = md5($_POST['senha']);

    if(isset($_POST['nome']) && isset($_POST['email']) && (($_POST['senha'])!=="")){  

        $sql = "SELECT nome, email, senha FROM login where email='$email'"; 
        $result = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_assoc($result);
        
        if ((($row["nome"])===$nome) && (($row["email"])===$email) && (($row["senha"])===$senha)){
            echo "<script>
                alert ('Login realizado com sucesso!')
                window.location.href='#'
            </script>";
        }
        else{
            echo "<script>
                alert ('Nome, E-mail ou Senha inválido(a)!')
                window.location.href='index.html'
            </script>";
        } 
    }
    else{
        echo "<script>
                alert ('Nome, E-mail ou Senha inválido(a)!')
                window.location.href='index.html'
            </script>";
    }  