@section('main')
{{HTML::style('assets/css/styles.css')}}
{{ Form::open(array('url' => 'login')) }}
 <div id="login" class="well sidebar-nav">
		<h1>Iniciar Sesion</h1>

		<!-- if there are login errors, show them here -->
		<div class="form-group">
			{{ $errors->first('nombre') }}
			{{ $errors->first('password') }}
		</div>

		<div class="form-group">
			{{ Form::label('nombre', 'Nombre', array('class' => 'control-label')) }}
			{{ Form::text('nombre', Input::old('nombre'),  array('class' => 'form-control') ) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password',  array('class' => 'form-control')) }}
		</div>

		
		<label>
		{{ Form::checkbox('rememberme', true) }} Recuerdame
		</label>
		
		<div>{{ Form::submit('Entrar', array("class" => "btn btn-primary btn-sm")) }}</div>


</div>
{{ Form::close() }}

@stop