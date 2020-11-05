<!DOCTYPE html>

    <head>
        <meta lang="pt-br">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/global.css">
        <title>BebendoBem | Login</title>
        <style>
        body{
            background-color:#B98EFF;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    </head>

    <body> 
        <div class="menu text-flex">
            <a href="index.php" class="text-dark btn btn-sm btn-light my-1">Voltar para a tela de menu</a>
        </div>
            
        <div class="display-4 font-weight-bold text-white container text-center"><h2> Login do usuário</h2></div>

        <form action='login_usuario.php' method='POST'>  
            <section class="container bg-secundary-color">
                <div class="form-group-sm">
                    <input class= "form-control" placeholder="Digite o seu e-mail" type="email" name="email"><br>
                    <input class= "form-control" placeholder="Digite a sua senha" type="password" name="senha"><br>           
                    
                    <button class="btn btn-primary form-control" type="submit">Entrar</button><br><br>
                    <a href="cadastro.php"><input class="btn btn-primary form-control" value="Nao possui cadastro? Clique aqui!" class=" m-1 p-1 bg-light text-dark rounded"></a><br><br>
                    <button class="btn btn-primary form-control" type="reset">Limpar dados</button>
                </div>
            </section>
        </form> 
    </body>
</html>