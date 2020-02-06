<?php

use App\Product;

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
    /*
    $prod = new Product();
    $prod->nombre = 'Producto 3';
    $prod->slug = 'producto-3';
    $prod->category_id = 2;
    $prod->descripcion_corta = 'Descripción corta del producto 3';
    $prod->descripcion_larga = 'Esta es la descripción más larga del producto 3';
    $prod->especificaciones = 'Especificaciones del producto 3';
    $prod->datos_de_interes = 'Los datos de interés del producto 3';
    $prod->estado = 'Nuevo';
    $prod->activo = 'Si';
    $prod->sliderprincipal = 'No';

    $prod->save();
    return $prod;

    */
$prod = Product::find(1)->category;
return $prod;

    //return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
