
            <div  id="login" class="well sidebar-nav">
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