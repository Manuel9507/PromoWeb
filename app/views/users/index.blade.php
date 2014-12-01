@section('main')
{{Form::model(new User, ['route'=>['users.store'], 'role' => 'form', 'class' => 'form-horizontal ']) }}
@include('users/partials/_login',['submit_text'=>'Agregar'])
{{Form::close()}}
@stop