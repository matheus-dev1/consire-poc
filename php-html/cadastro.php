<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            background-color:lightslategrey;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="menu text-right">
        <a href="" class="text-dark btn btn-sm btn-light my-1">Ir para a página incial</a>
    </div>
    <div class="container-fluid py-4 px-5 bg-light rounded row">
        <div class="col">
        <h1 class="display-4 font-weight-bold">Cadastro</h1>
        <p class="lead font-weight-bold">Squad5 - SPT1</p>
        <form action="SQLInsert.php" method="POST">
            <div class="form-group">
                <label for="nome">Informe seu nome:</label><br>
                <input type="text" id="nome" name="nome" class="m-1 p-1 rounded form-control" >
             </div>
         
            <div class="form-group">
                <label for="email">Informe seu e-mail:</label><br>
                <input type="email" id="email" name = "email" class="m-1 p-1 rounded form-control" placeholder="nome@exemplo.com">
                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>

            <div class="form-group row">
                <div class="col">
                    <label for="senha">Informe sua senha:</label><br>
                    <input type="password" name="senha" id="senha" class="m-1 p-1 rounded form-control" placeholder="********"><br>
                </div>

                <div class="col">
                    <label for="confirme">Confirme sua senha:</label><br>
                    <input type="password" name="confirme" class="m-1 p-1 rounded form-control" placeholder="********"><br>
                </div>
            </div>
            <input type="reset" value="Limpar campos" class=" m-1 p-1 bg-light text-dark rounded">
            <input type="submit" value="Cadastrar" class=" m-1 p-1 bg-light text-dark rounded">
            <a href="login.php">Ja tem Cadastro? Clique aqui!</a>
        </form>
        </div>
        <div class="col text-center">
            <img id="foto" class="img-fluid rounded" src="https://images.pexels.com/photos/355952/pexels-photo-355952.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="liberdade">
            <div class="btn-group">
                <button type="button" class="btn btn-primary " onclick="mudarfoto1()"></button>
                <button type="button" class="btn btn-dark " onclick="mudarfoto2()"></button>
                <button type="button" class="btn btn-primary " onclick="mudarfoto3()"></button>
              </div>
        </div>
    </div>

    <script>
        function mudarfoto1(){
            document.getElementById('foto').src = "https://images.pexels.com/photos/355952/pexels-photo-355952.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
        }
        function mudarfoto2(){
           document.getElementById('foto').src = "https://images.pexels.com/photos/112988/pexels-photo-112988.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
        }
        function mudarfoto3(){
            document.getElementById('foto').src = "https://images.pexels.com/photos/1411397/pexels-photo-1411397.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
        }
    </script>
</body>
</html>