<?php


Route::get('/', function () {
    return view('welcome');
});
Route::resource('producto', 'ProductosController');

Route::resource('categoria', 'CategoriasController');



//Las siguientes rutas ejecutan el metodo @confirm que esta en el controlador CategoriasController y ProductosController
Route::get('/categoria/{id}/confirm','CategoriasController@confirm')->name('categoria.confirm');
Route::get('/producto/{id}/confirm','ProductosController@confirm')->name('producto.confirm');

Route::get('/cancelar_producto', function(){
    return redirect()->route('producto.index')->with('cancelar','Acción Cancelada');
})->name('cancelar_producto');


/*
//Ejemplo para usar un controlador con un metodo particular usando LARAVEL 8:
// En este caso no usa un namespace: 
Route::get('/home', [App\Http\Controllers\ClientesController::class, 'index'])->name('home');

//Ejemplo de una ruta usando un namespace:
use App\Http\Controllers\PostController;

//El método llama al método: index del controlador
Route::get('/post', [PostController::class, 'index']);

//Ruta con parámetro laravel 8:
// PostController - para el método show que recibe el parámetro
Route::get('/user/{id}', [UserController::class, 'show']);

//https://www.nicesnippets.com/blog/laravel-8-routing-example-tutorial
//php artisan route:list
*/
//* UTILIZAR EXTENSION: php namespace resolver para importar los namespace de los controladores
//Ejemplo de ruta para los cancelar:

//**Controlador resource con laravel 8:
//Route::resource('admin/product', AdminProductController::class)->names('admin.product');

Route::get('cancelar/{ruta}', function($ruta) {
    
    return redirect()->route($ruta)->with('cancelar','Acción Cancelada!');
})->name('cancelar');

//Limpiar cache:

//php artisan cache:clear
//php artisan route:cache