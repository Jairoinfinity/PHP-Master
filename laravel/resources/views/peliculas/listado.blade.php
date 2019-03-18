<h1>{{$titulo}}</h1>
@if($listado)
    <ul>
    @foreach($listado as $peli)
        <li>{{$peli}}</li>
    @endforeach
    </ul>
@else
    <h2>No hay oeliculas</h2>
@endif
