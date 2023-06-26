<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\EquiposController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    
    //Rutas de Roles
    Route::get('/roles/{role}/delete', [RoleController::class, 'delete'])->name('roles.delete');
    Route::resource('roles', RoleController::class);

    //Rutas de Usuarios
    Route::get('/users/{user}/delete', [UserController::class, 'delete'])->name('users.delete');
    Route::resource('users', UserController::class);

    //Rutas de Productos
    Route::get('/products/{product}/delete', [ProductController::class, 'delete'])->name('products.delete');
    Route::resource('products', ProductController::class);

    //Rutas de Dependencias
    Route::get('/dependencia/{dependencia}/delete',[DependenciaController::class, 'delete'])->name('dependencia.delete');
    Route::resource('dependencia', DependenciaController::class);
    
    //Rutas de Empleados
    Route::get('/empleados/{empleados}/delete',[EmpleadosController::class, 'delete'])->name('empleados.delete');
    Route::resource('empleados', EmpleadosController::class);

    //Rutas de Equipos
    Route::get('/equipos/{equipos}/delete',[EquiposController::class, 'delete'])->name('equipos.delete');
    Route::resource('equipos', EquiposController::class);
});

Route::get('/sidebar', function () {
    return view('sidebar');
});