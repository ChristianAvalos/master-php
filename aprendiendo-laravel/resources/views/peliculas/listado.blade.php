@include('includes.header')
<!-- Imprimir por pantalla -->
<h1>{{$titulo}}</h1>
<h2>{{$listado[2]}}</h2>
<p>{{date('Y')}}</p>

<!-- Comentarios -->

<?php //esto es un cometario en php ?>
{{-- Esto es un comentario blade --}}

<!-- Ternarias en php y blade -->
<?= isset($director)? $director:'No hay director';?>
<br/>
<!-- La opcion or en blade se cambio ahora es ?? -->
{{$director ?? 'No hay director'}}

<br/>

<!-- Condicionales en blade -->
@if($titulo && count($listado)>=5)
    <h1>El titulo existe y es este: {{$titulo}} y el listado es mayor a </h1>
@elseif($titulo)
    <h1>El titulo existe y el titulo no es mayor a  5</h1>
@else 
    <h1>El titulo no existe</h1>

@endif

<!-- Bucles en blade -->
@for ($i=0;$i<=20;$i++)
    El numero es: {{ $i}} <br/>
@endfor
<hr/>
<?php $contador = 1 ?>
@while ($contador<50)
    @if($contador % 2 == 0)
        Numero par: {{$contador}} <br/>
    @endif
    <?php $contador++;?>
@endwhile
<hr/>
@foreach($listado as $pelicula)
<p>{{$pelicula}}</p>
@endforeach


@include('includes.Footer')