@section('main')
<h2>Nueva Publicación</h2>

{{Form::model(new Ad, ['route'=>['ads.store'], 'role' => 'form', 'class' => 'form-horizontal ']) }}
@include('ads/partials/_form',['submit_text'=>'Agregar'])
{{Form::close()}}
@stop