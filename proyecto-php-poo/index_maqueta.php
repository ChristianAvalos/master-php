<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
        <title>Tienda de camisetas</title>
        <link rel="stylesheet" href="assets/css/styles.css"/>

</head>
    <body>
        <div id="container">
        <!--Cabecera-->
        
        <header id="header">
            <div id="logo">
                <img src="assets/img/camiseta.png"/>
                <a href="index.php">
                    Tienda de camisetas
                </a> 
            </div>
        </header>

        <!--Menu-->
        <nav id="menu">
            <ul>
                <li>
                    <a href="">Categoria 1</a>
                </li>

                <li>
                    <a href="">Categoria 2</a>
                </li>

                <li>
                    <a href="">Categoria 3</a>
                </li>

                <li>
                    <a href="">Categoria 4</a>
                </li>
            </ul>
        </nav>

        <!--Barra Lateral-->
    <div id="content">
            <aside id="lateral">
                <div id="login" class="block_aside">
                    <h3>Entrar a la web</h3>
                    <form action="" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email"/>
                        <label for="password">Contraseña</label>
                        <input type="password" name="password"/>
                        <input type="submit" value="Iniciar"/>
                    </form> 
                    <ul>
                        <li><a href="">Mis pedidos</a></li>
                        <li><a href="">Gestionar pedidos</a></li>
                        <li><a href="">Gestionar categorias</a></li>
                    </ul>
                </div>

            </aside>

        <!--Contenido Central-->
        <div id="central">
            <h1>Productos destacados</h1>
            <div class="product">
                <img src="assets/img/camiseta.png"/>
                <h2>Camiseta azul ancha</h2> 
                <p>30 euros</p>
                <a href="" class="buttom">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/camiseta.png"/>
                <h2>Camiseta azul ancha</h2> 
                <p>30 euros</p>
                <a href=""class="buttom">Comprar</a>
            </div>

            <div class="product">
                <img src="assets/img/camiseta.png"/>
                <h2>Camiseta azul ancha</h2> 
                <p>30 euros</p>
                <a href=""class="buttom">Comprar</a>
            </div>

        </div>
    </div>
        <!--Pie de pagina-->
        <footer id="footer">
        <p>Desarrollado por Christian Avalos &copy;<?=date('Y')?></p>
        </footer>
    </body>
</html>