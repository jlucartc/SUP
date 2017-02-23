<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body style="background-color:#ccccff">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color:#55aaff">Academicard</a>
        <a class="navbar-brand" href="#"><img src="img/user.jpg" alt="" width="25" height="25"></a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="#"><b>Planos em andamento</b></a></li>
        <li><a href="#"><b>Planos contratados</a></b></li>
      </ul>
      <form class="navbar-form navbar-right" action="index.html" method="post">
        <div class="input-group">
          <input class="form-control" type="text" name="" value="" placeholder="Buscar">
          <div class="input-group-btn">
            <button class="btn btn-default" type="button" name="button"><span class="glyphicon glyphicon-search"></span></button>
          </div>
        </div>
      </form>
    </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
          <div class="panel panel-primary">
            <div class="panel-heading" align="center">
              <h3>Planos Contratados</h3>
            </div>
            <div class="list-group">
              <button class="btn btn-default list-group-item" type="button" name="button">Plano 1 - Banco x</button>
              <button class="btn btn-default list-group-item" type="button" name="button">Plano 2 - Banco y</button>
              <button class="btn btn-default list-group-item" type="button" name="button">Plano 3 - Banco z</button>
            </div>
          </div>
        </div>
        <div class="col-sm-3">

        </div>
      </div>
    </div>
  </body>
</html>
