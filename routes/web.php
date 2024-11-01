<?php
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\TrainerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi_primer_ruta', function () {
    return ('Hola Lizeth');
});

Route::get('/name/{name}', function ($name) {
    return 'Hola soy '.$name;
});

Route::get('/name/{name}/lastname/{apellido}', function ($name,$apellido) {
    return 'Hola soy '.$name.' '.$apellido;
});

Route::get('/name/{name}/lastname/{apellido?}', function ($name,$apellido=null) {
    return 'Hola soy '.$name.' '.$apellido;
});

Route::get('/name/{name}/lastname/{apellido?}', function ($name,$apellido='apellido') {
    return 'Hola soy '.$name.' '.$apellido;
});


Route::get('/1er/{num}/2do/{num2}',
function ($num, $num2) {
    $resultado = $num + $num2;
    return 'La suma es '.$resultado;
});

//Route::get('/', function () {
    //return ('Pantalla principal');
//});

//Route::get('/login', function () {
    //return ('Login usuario');
//});

Route::get('/logout', function () {
    //return ('Logout usuario');
});

//Route::get('/catalog', function () {
    //return ('Listado películas');
//});

//Route::get('/catalog/show/{id}', function ($id) {
    //return 'Vista detalle película '.$id;
//});

//Route::get('/catalog/create', function () {
    //return ('Añadir película');
//});

//Route::get('/catalog/edit/{id}', function ($id) {
    //return 'Modificar película '.$id;
//});

//Route::get('/login', function () {
    //return view('Login');
//});

Route::get('rutaprueba', [PruebaController::class,'prueba2']); 

//Route::get('/', [HomeController::class,'home1']); 

Route::get('catalog', [CatalogController::class,'catalog1']); 

Route::get('/catalog/show/{id}', [CatalogController::class,'catalog2']);

Route::get('catalog/create', [CatalogController::class,'create']); 

Route::get('/catalog/edit/{id}', [CatalogController::class,'edit']);


Route::middleware(['auth'])->group(function () {
    Route::resource('/trainers', TrainerController::class);
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Auth::routes();


Route::get('delete/{id}', [TrainerController::class,'destroy']);

Route::put('/trainers/{id}', [TrainerController::class, 'update']);


