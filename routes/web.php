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
// Ruta principal que muestra la pantalla principal
Route::get('/', function () {
    return "Pantalla principal";
});
// Ruta para mostrar el formulario de inicio de sesión
Route::get('login', function () {
    return "Login usuario";
});

// Ruta para cerrar sesión
Route::get('logout', function () {
    return "Logout usuario";
});

// Ruta para listar proyectos
Route::get('proyectos', function () {
    return "Listado proyectos";
});

// Ruta para ver el detalle de un proyecto por su ID
Route::get('proyectos/show/{id}', function ($id) {
    return "Vista detalle proyecto $id";
})->where('id', '[0-9]+'); // Asegura que {id} sea un número natural

// Ruta para añadir un proyecto
Route::get('proyectos/create', function () {
    return "Añadir proyecto";
});

// Ruta para editar un proyecto por su ID
Route::get('proyectos/edit/{id}', function ($id) {
    return "Modificar proyecto $id";
})->where('id', '[0-9]+'); // Asegura que {id} sea un número natural

// Ruta para ver el currículo, ya sea propio o de otro usuario
Route::get('perfil/{id?}', function ($id = null) {
    if ($id !== null) {
        return "Visualizar el currículo de $id";
    } else {
        return "Visualizar el currículo propio";
    }
})->where('id', '[0-9]+'); // Asegura que {id} sea un número natural
