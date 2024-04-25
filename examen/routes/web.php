<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/ingresar', function () {
    return view('ingresar');
});
Route::get('/enfermeras', function () {
    return view('enfermeras');
});
Route::get('/medicamentos', function () {
    return view('medicamentos');
});
Route::get('/pacientes', function () {
    return view('pacientes');
});
Route::get('/recetas', function () {
    return view('recetas');
});
Route::get('/pacientes', function () {
    return view('pacientes');
});
Route::get('/citas', function () {
    return view('citas');
});

