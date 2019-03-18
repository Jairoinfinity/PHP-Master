<?php

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
    return view('welcome');
});

Route::get("/fecha", function(){
    $titulo = "Fecha";
    return view("fecha", array(
        "titulo" => $titulo
    ));
});

Route::get("/pelicula/{titulo}/{year?}", function($titulo, $year = 2019){
    return view("pelicula", array(
        "peli" => $titulo,
        "year" => $year
    ));
})->where(array(
    "year" => "[0-9]+"
));

Route::get("/listado", function(){
    $listado = array("Spiderman","Batman","Harry Potter", "Titanic");
    return view("peliculas.listado", array(
        "titulo" => "Listado de Peliculas",
        "listado" => $listado
    ));
});

Route::get("/pagina-generica", function(){
    return view("pagina");
});