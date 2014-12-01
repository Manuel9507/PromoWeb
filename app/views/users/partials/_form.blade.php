
            <div class="well sidebar-nav">
                  <h3>Iniciar Sesión</h3>
                  <div class="form-group">
                     {{Form::label('nombre','Nombre: ', array('class' => 'control-label') )}}
                     {{Form::text('nombre', null, array('class' => 'form-control')) }}
                  </div>
                  <div class="form-group">
                     {{Form::label('email','Email: ', array('class' => 'control-label') )}}
                     {{Form::text('email', null, array('class' => 'form-control')) }}
                  </div>
                  <div class="form-group">
                     {{Form::label('password','Password: ')}}
                     {{Form::text('password',null, array('class' => 'form-control'))  }}
                  </div>
                  <br />
                {{Form::submit($submit_text)}}
                {{ Form::close() }}
            </div>