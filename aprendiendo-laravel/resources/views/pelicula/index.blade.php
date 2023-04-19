<h1>{{$titulo}}</h1>
<p>Accion index del controlador Peliculas controller</p>
@if(isset($pagina))
    <h3>La pagina es: {{$pagina}}</h3>
@endif

<a href="{{ route('detalle.pelicula') }}">Ir al detalle</a>