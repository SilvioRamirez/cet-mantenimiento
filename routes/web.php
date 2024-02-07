<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\HardwareCalendarioController;
use App\Http\Controllers\SoftwareController;
use App\Http\Controllers\SoftwareCalendarioController;
use App\Http\Controllers\InformesTecnicosController;

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

    //Rutas de Dependencias
    Route::get('/dependencia/{dependencia}/delete',[DependenciaController::class, 'delete'])->name('dependencia.delete');
    Route::get('/dependencia/list',[DependenciaController::class, 'list'])->name('dependencia.list');
    Route::resource('dependencia', DependenciaController::class);
    
    //Rutas de Hardware
    Route::get('/hardware/{hardware}/delete',[HardwareController::class, 'delete'])->name('hardware.delete');
    Route::get('/hardware/{hardware}/pdf', [HardwareController::class, 'pdf'])->name('hardware.pdf');
    Route::resource('hardware', HardwareController::class);

    //Rutas de Hardware Calendario
    Route::post('/hardwarecalendario/store_ajax',[HardwareCalendarioController::class, 'store'])->name('hardwarecalendario.store.ajax');
    Route::get('calendar-event-hardware', [HardwareCalendarioController::class, 'events']);
    Route::post('calendar-crud-ajax-hardware', [HardwareCalendarioController::class, 'calendarEvents']);
    Route::resource('hardwarecalendario', HardwareCalendarioController::class);

    //Rutas de Software
    Route::get('/software/{software}/delete',[SoftwareController::class, 'delete'])->name('software.delete');
    Route::get('/software/{software}/pdf', [SoftwareController::class, 'pdf'])->name('software.pdf');
    Route::resource('software', SoftwareController::class);
    
    //Rutas de Software Calendario
    Route::post('/softwarecalendario/store_ajax',[SoftwareCalendarioController::class, 'store'])->name('softwarecalendario.store.ajax');
    Route::get('calendar-event', [SoftwareCalendarioController::class, 'events']);
    Route::post('calendar-crud-ajax', [SoftwareCalendarioController::class, 'calendarEvents']);
    Route::resource('softwarecalendario', SoftwareCalendarioController::class);
    
    //Rutas de Informe Tecnico
    Route::get('/informe/{informe}/delete',[InformesTecnicosController::class, 'delete'])->name('informe.delete');
    Route::get('/informe/{informe}/pdf', [InformesTecnicosController::class, 'pdf'])->name('informe.pdf');
    Route::resource('informe', InformesTecnicosController::class);
    
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
