@section('main')
	<h2>Anuncios</h2>
	@if ( !$ads->count() )
		Aún no se han creado Anuncios en esta página.
	@else
		<ul>
			@foreach( $ads as $ad )
			 
			 <div id="picture" >
				<a href="{{ route('ads.show', $ad->id) }}">
				<strong>{{ $ad-> titulo }}</strong></a>
				<p>{{ $ad->contenido }}</p>
				<p>{{ $ad->descripcion }}</p>
				</div>
			@endforeach
		</ul>
	@endif
		<p>{{ link_to_route('ads.create', 'Crear un Nuevo Anuncio')}}</p>

@stop