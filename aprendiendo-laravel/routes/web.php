<?php

use App\Http\Controllers\FrutaController;
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //echo '<h1>Hola Mundo </h1>';
    return view('welcome');
});


//laravel 9 asi se asigna el controlador
Route::get('/peliculas/{pagina?}',[PeliculaController::class, 'index'])->name('detalle.index');

Route::get('/detalle/{year?}', [PeliculaController::class, 'detalle'])
->name('detalle.pelicula')
->middleware('TestYear');

Route::get('/redirigir',[PeliculaController::class, 'redirigir'])->name('redirigir.detalle');

Route::resource('usuario', UsuarioController::class);

Route::get('/formulario',[PeliculaController::class, 'formulario']);
Route::post('/recibir',[PeliculaController::class, 'recibir'])->name('pelicula.recibir');

Route::group(['prefix'=>'frutas'],function(){
    Route::get('index',[FrutaController::class,'index'])->name('fruta.index');
    Route::get('detail/{id}',[FrutaController::class,'detail'])->name('fruta.detail');
    Route::get('crear',[FrutaController::class,'create'])->name('fruta.crear');
    Route::post('save',[FrutaController::class,'save'])->name('fruta.save');
    Route::get('delete/{id}',[FrutaController::class,'delete'])->name('fruta.delete');
    Route::get('editar/{id}',[FrutaController::class,'edit'])->name('fruta.edit');
    Route::post('update',[FrutaController::class,'update'])->name('fruta.update');
});
/*
GET: conseguir datos 
POST: guardar datos
PUT: actualizar recursos 
DELETE: eliminar recursos
*/
/*
Route::get('/mostrar-fecha',function(){
    $titulo = 'Estoy mostrando la fecha';
    return view('mostrar-fecha',array(
        'titulo'=> $titulo
    ));
});
/*
Route::get('/pelicula/{titulo}/{year?}',function($titulo='No hay una pelicula seleccionada',$year = 2022){
    //$titulo = 'Estoy mostrando la fecha';
    return view('pelicula',array(
        'titulo'=> $titulo,
        'year'=>$year
    ));

})->where(array(
    'titulo'=>'[a-zA-Z]+',
    'year'=>'[0-9]+'
));

Route::get('/listado-peliculas',function(){
    $titulo= "Listado de peliculas";
    $listado= array('batman','spiderman','God of war');
    return view('peliculas.listado')
            ->with('titulo',$titulo)
            ->with('listado',$listado);
});

Route::get('/pagina-generica',function(){
    return view('pagina');
});*/