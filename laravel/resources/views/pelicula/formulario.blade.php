<h1>Formulario en Laravel</h1>

<form action="{{action('PeliculaController@recibir')}}" method="POST">
    {{ csrf_field() }}
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email"><br>
    <input type="submit">
</form>