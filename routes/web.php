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
    return "<a href='".route('usuario')."'>Ir a usuarios</a>";
});

Route::get('usuarios/{id?}', function ($id=1) {
    return 'El id de este usuario es '.$id;
})->name("usuario");
