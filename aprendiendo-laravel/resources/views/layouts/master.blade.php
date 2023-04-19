<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Titulo - @yield('titulo')</title>
    </head>
    <body>
        @section('header')
            <h1>Cabecera de la WEB (master)</h1>
        @show
        <hr/>
        <div class="container">
            @yield('content')
       </div> 
        @section('footer')
            Pie de pagina (master)
        @show
    </body>
</html>