<?php

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

Route::get('/sistema', 'InformacionController@contador')->name('tienda');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('/productos', 'ProductoController');
    Route::get('/informacion-pagina', 'InformacionController@editar_info')->name('info.edit');
    Route::put('/informacion-pagina/actualizar/{id}', 'InformacionController@update_info')->name('info.update');
    Route::get('/productos-eliminados', 'InformacionController@eliminados')->name('productos.eliminados');
    Route::get('/restaurar/{x}', 'InformacionController@restaurar')->name('restaurar');
    Route::get('/banner', 'BannerController@index')->name('inicio.banner');
    Route::post('/banner-crear', 'BannerController@store')->name('crear.banner');
    Route::delete('/elimnar-foto/{foto}', 'FiltradoController@eliminar_foto')->name('eliminar.xfoto');
    Route::delete('/fotos/{foto}', 'BannerController@destroy')->name('eliminar.banner');

});

Route::get('/', 'TiendaController@index')->name('inicio.tienda');
Route::get('producto/{id}', 'TiendaController@informacion')->name('info.producto');
Route::get('/productos/categoria/{categoria}', 'FiltradoController@filtrado_categoria')->name('filtro.categoria');
Route::get('/productos/subcategoria/{submarcas}', 'FiltradoController@filtrado_marcas')->name('filtro.marca');
Route::post('productos/resultados-de-la-busqueda', 'FiltradoController@busqueda')->name('filtro.termino');

Auth::routes();

Route::get('/es/{id}','ProductoController@findSubcategoria')->name('x');
Route::get('/obtener/{id}','ProductoController@findSubcategoria2')->name('y');
