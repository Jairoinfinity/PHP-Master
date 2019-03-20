<h1>{{$titulo}}</h1>

@if(isset($pagina))
    <h3>La pagina es: {{$pagina}}</h3>
@endif

<a href="{{action('PeliculaController@detalle')}}">Ir al detalle</a>