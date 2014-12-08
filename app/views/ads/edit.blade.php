@section('main')
<h2>Edicion de Anuncio</h2>



{{ Form::model($ad, array('method' => 'PATCH', 'route' => ['ads.update', $ad->id],'role' => 'form', 'class' => 'form-horizontal') ) }}
		
		@include('ads/partials/_form', ['submit_text' => 'Actualizar'])
	
	{{ Form::close()}}


@stop