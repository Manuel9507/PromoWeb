<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PromoWeb</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="padding-bottom: 30px;">
<nav class="navbar navbar-blue navbar-static-top" role="navigation">
  <div class="container-fluid">
   <h1 align="center">PromoWeb</h1>
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Inicio</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Publicación</a></li>
        <li>
          <a href="#" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Registra Usuario</a>
       </li>
      </ul>
     
    </div>
  </div>
</nav>

<div class="container" >

  <div class="row">

      <div class="col-md-5">
      <div class="well">

            @yield('main')
            </div>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="well sidebar-nav">

                  <h3>Iniciar Sesión</h3>
                  <div class="form-group">
                     {{Form::label('nombre','Nombre: ', array('class' => 'control-label') )}}
                     {{Form::text('nombre', null, array('class' => 'form-control')) }}
                  </div>
                  <div class="form-group">
                     {{Form::label('password','Password: ')}}
                     {{Form::text('password',null, array('class' => 'form-control'))  }}
                  </div>
                  <br />
                {{ Form::submit('Entrar', array("class" => "btn btn-primary btn-sm")) }}
                {{ Form::close() }}
            </div>
        </div>
  </div>
</div>
                       <div class="col-sm-6">
                            <p>
                            <a href="#" class="pull-right">©Copyright 2013</a>
                            </p>
                          </div>
                         

  <script src="/assets/js/jquery-1.11.1.js"></script>

    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>
