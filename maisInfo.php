<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body style="background-color:#9999ff;">
    <div class="container" style="margin-top:20px;margin-bottom:20px;">
      <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <h2>Titulo do Plano</h2>
            <h2><small>Escolha a configuração do seu plano:</small></h2><br>

            <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3>Regras do plano:</h3>
              </div>
              <div class="panel-body">
                <p>O plano possui um limite máximo de crédito e um limite minimo de pessoas. Caso o limite de pessoas não seja atingido, o plano não poderá ser confirmado no final do prazo.</p><p><b>OBS: Mesmo que o crédito não seja totalmente utilizado, se a quantidade mínima de contratantes não for atingida, o plano poderá não ser confirmado. No entanto, é importante lembrar que não há limite máximo de contratantes, desde que o limite de crédito seja respeitado.</b></p><br>
              </div>
            </div>
            <div class="dropdown">
              <button class="alert alert-info dropdown-toggle" data-toggle="dropdown">A média de crédito para a sua categoria é de R$ 500.<span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><p style="padding:5px;">Se o seu crédito estiver abaixo desse valor, você terá um beneficio nas taxas de juros e na anuidade</p></li>
              </ul>
            </div><br>
            <form class="" action="index.html" method="post">
              <div class="col-sm-6">
              <input class="form-control" type="text" name="" value="" placeholder="Crédito"><br>
              <br>  
              <label for="">Anuidade: R$ 75,55</label><input type="range" name="" value=""><br>
              <label for="">Taxa de Juros(mensal): 15,90% </label><input type="range" name="" value=""><br>
              <button class="btn btn-primary" type="button" name="button">Confirmar</button>
            </div>
            </form>
        </div>
        <div class="col-sm3">

        </div>
      </div>
    </div>
  </body>
</html>
