<h1>Formulario en laravel</h1>
<form action="{{route('pelicula.recibir')}}" method="POST">
        {{ csrf_field() }}
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br/>
        <label for="email">Correo</label>
        <input type="email" name="email">
        <br/>
        <input type="submit" value="Enviar"/>
</form>