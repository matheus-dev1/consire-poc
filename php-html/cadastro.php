<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BebendoBem | Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/global.css">
    <style>
        body{
            background-color:#B98EFF;
            font-family: Arial, Helvetica, sans-serif;
        }
        .cor {
            background-color:#B98EFF;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <div class="menu text-flex">
        <a href="index.php" class=" text-dark btn btn-sm btn-light my-1">Voltar para a tela de menu</a>
    </div>
    <div class="container-fluid py-4 px-5 rounded row cor">
        <div class="col cor">
        <h1 class="display-4 font-weight-bold text-white">Cadastro</h1>
        <form action="SQLInsert.php" method="POST">
            <div class="form-group">
                <input type="text" id="nome" name="nome" class="m-1 p-1 rounded form-control" placeholder="Digite o seu nome aqui">
             </div>
         
            <div class="form-group">
                <input type="email" id="email" name="email" class="m-1 p-1 rounded form-control" placeholder="Digite o seu e-mail aqui. Exemplo: nome@exemplo.com">
                <small id="emailHelp" class="text-white">&nbsp;Nunca vamos compartilhar seu email, com ninguém.</small>
            </div>

            <div class="form-group row">
                <div class="col">
                    <label class="text-white" for="confirme" for="senha">&nbsp;Informe sua senha:</label><br>
                    <input type="password" name="senha" id="senha" class="m-1 p-1 rounded form-control" placeholder="********"><br>
                </div>

                <div class="col">
                    <label class="text-white" for="confirme">&nbsp;Confirme sua senha:</label><br>
                    <input type="password" name="confirme" class="m-1 p-1 rounded form-control" placeholder="********"><br>
                </div>
            </div>
            <input class="btn btn-primary form-control" type="submit" value="Cadastrar" class=" m-1 p-1 bg-light text-dark rounded"><br><br>
            <a href="login.php"><input class="btn btn-primary form-control" value="Ja possui cadastro? Clique aqui!" class=" m-1 p-1 bg-light text-dark rounded"></a><br><br>
            <input class="btn btn-primary form-control" type="reset" value="Limpar campos" class=" m-1 p-1 bg-light text-dark rounded">
            
            
        </form>
        </div>
        <div class="col text-center">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../img/info_garr_carnaval.jpg" alt="Primeiro Slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../img/infográfico-melhor.png" alt="Segundo Slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="..//img/infografico_alcoolismo-novo.png" alt="Terceiro Slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Próximo</span>
                </a>
              </div>
        </div>
    </div>
</body>
</html>