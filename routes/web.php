<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\UsuariosController;


Route::get('/usuarios',function(){
    return view('layout');
});

Route::get('/administrador',function(){
    return view('index');
});

/* Route::get('ruta_prueba',           [Controller::class,'index'])   ->name('ruta_prueba.index');



Route::get('ruta_prueba/create',    [Controller::class,'create'])  ->name('ruta_prueba.create');



Route::post('ruta_prueba',          [Controller::class,'store'])   ->name('ruta_prueba.store');



Route::get('ruta_prueba/{id}',      [Controller::class,'show'])    ->name('ruta_prueba.show');



Route::get('ruta_prueba/{id}/edit', [Controller::class,'edit'])    ->name('ruta_prueba.edit');



Route::patch('ruta_prueba/{id}',    [Controller::class,'update'])  ->name('ruta_prueba.update');



Route::get('ruta_prueba/{id}',      [Controller::class,'destroy']) ->name('ruta_prueba.destroy');

 */


 Route::get('prueba', [ProductosController::class,'funcion']);


Route::get('/ruta1', 
function () {return view('vista'); }//nombre del archivo sin la extencion
);

Route::get('/ruta2',
[Controller::class,'funcion']
);

Route::get('/ruta3', 
[Controller::class,'funcion2']
);

Route::get('/ruta4/{id}', 
[Controller::class,'funcion3']
);

Route::get('/formulario', 
function () {return view('form'); }
);

Route::get('/select1', 
[ProductosController::class,'select1']
);

Route::get('/select2', 
[ProductosController::class,'select2']
);

Route::get('/selectAll', 
[ProductosController::class,'selectAll']
);

Route::get('/insert', 
[ProductosController::class,'insert']
);

Route::get('/delete', 
[ProductosController::class,'delete']
);


Route::get('/formulario', 
    function () {return view('form'); }
);

Route::post('/recibir', 
    [ProductosController::class,'insertar']
)->name('recibir');