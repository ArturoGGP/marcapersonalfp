<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Pantalla principal
Route::get('/', function () {
    return "Pantalla principal";
});
// Inicio de sesión
Route::get('login', function () {
    return "Login usuario";
});

// Cerrar sesión
Route::get('logout', function () {
    return "Logout usuario";
});

// Listar proyectos
Route::get('proyectos', function () {
    return "Listado proyectos";
});

// Ver el detalle de un proyecto por su ID
Route::get('proyectos/show/{id}', function ($id) {
    return "Vista detalle proyecto $id";
})->where('id', '[0-9]+'); // Asegura que {id} sea un número natural

// Añadir un proyecto
Route::get('proyectos/create', function () {
    return "Añadir proyecto";
});

//Editar un proyecto por su ID
Route::get('proyectos/edit/{id}', function ($id) {
    return "Modificar proyecto $id";
})->where('id', '[0-9]+'); // Asegura que {id} sea un número natural

// Ver el currículo
Route::get('perfil/{id?}', function ($id = null) {
    if ($id !== null) {
        return "Visualizar el currículo de $id";
    } else {
        return "Visualizar el currículo propio";
    }
})->where('id', '[0-9]+'); // Asegura que {id} sea un número natural
