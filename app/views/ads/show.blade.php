@section('main')
	<h2>{{ $ad->titulo }}</h2>
	<span>Por: {{ $ad->user->nombre }}
	el {{ $ad->created_at }}</span>
	<p>
		{{ $ad->contenido }}
	</p>
	<p><strong> Prioridad: </strong> {{ $ad->prioridad }}
	</p>

	
	<p align="center">
	{{ link_to_route('ads.index', 'Volver a Anuncios')}}
	</p>
	
		<p>
	{{link_to_route('ads.edit','Editar Anuncio', $ad->id)}}
</p>

@stop

